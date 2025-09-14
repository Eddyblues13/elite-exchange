<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Package;
use App\Mail\sendUserEmail;
use Illuminate\Http\Request;
use App\Mail\ShipmentStartMail;
use App\Mail\UpdateShipmentMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{

    public function view(Package $package)
    {
        return view('package.user_view', compact('package'));
    }

    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect('login')->with('error', 'You are not allowed to access');
        }

        $user = Auth::user();

        switch ($user->user_type) {
            case 0:
                $userId = $user->id;

                $package = Package::query()
                    ->where('user_id', $userId)
                    ->first();

                if ($package) {
                    return view('package.user_view', ['package' => $package]);
                } else {
                    // Log to check if this condition is being hit repeatedly
                    Log::info("No package found for user ID: $userId");
                    return redirect()->back()->with('error', 'No package found for this user.');
                }

            case 1:
                $data = [
                    'total_shipment_in_transit' => Package::where('parcel_status', 'In Transit')->count(),
                    'total_shipment_on_hold' => Package::where('parcel_status', 'On Hold')->count(),
                    'total_shipment_delivered' => Package::where('parcel_status', 'Delivered')->count(),
                    'total_shipment_failed' => Package::where('parcel_status', 'Failed')->count(),
                ];

                return view('dashboard.home', $data);

            default:
                Log::warning("Unexpected user_type: {$user->user_type} for user ID: {$user->id}");
                return redirect('login')->with('error', 'You are not allowed to access this area.');
        }
    }



    public function sendUserEmail()
    {
        if (Auth::check()) {

            return view('dashboard.user-email');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function profile()
    {
        if (Auth::check()) {

            return view('dashboard.profile');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function allPackages()
    {
        if (Auth::check()) {
            $data['packages'] = DB::table('packages')
                ->join('users', 'packages.user_id', '=', 'users.id')
                ->select('packages.*', 'users.name', 'users.email') // Specify the columns you want to retrieve
                ->get();

            return view('dashboard.all_shipment', $data);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function settings()
    {
        if (Auth::check()) {

            return view('dashboard.settings');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function createShipment()
    {
        if (Auth::check()) {

            return view('dashboard.shipment');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function saveShipment(Request $request)
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect("login")->with('error', 'You are not allowed to access');
        }

        // Validate the request data
        $validatedData = $request->validate([
            'sender_name' => 'required|string|max:255',
            'sender_phone' => 'required|string|max:20',
            'sender_email' => 'required|email|max:255',
            'sender_address' => 'required|string|max:255',

            'receiver_name' => 'required|string|max:255',
            'receiver_phone' => 'required|string|max:20',
            'receiver_email' => 'required|email|max:255|unique:users,email',
            'receiver_address' => 'required|string|max:255',
            'receiver_age' => 'required|integer|min:18', // Ensure the age field is included if it's necessary

            'parcel_description' => 'required|string|max:500',
            'dispatch_location' => 'required|string|max:255',
            'current_location' => 'required|string|max:255',
            'locale' => 'required|string|max:255555555',
            'parcel_status' => 'required|string|in:In Transit,On Hold,Delivered,Failed',
            'dispatch_date' => 'required|date',
            'delivery_date' => 'nullable|date|after_or_equal:dispatch_date',
        ]);

        try {
            // Check if the receiver already exists in the users table by email, or create a new entry
            $user = User::firstOrCreate(
                ['email' => $validatedData['receiver_email']], // Search for a user with this email
                [
                    'name' => $validatedData['receiver_name'],
                    'user_type' => 'receiver', // Example user type, change as needed
                    'phone' => $validatedData['receiver_phone'],
                    'age' => $validatedData['receiver_age'],
                    'address' => $validatedData['receiver_address'],
                    'password' => Hash::make('12345678'), // Default password, hashed
                ]
            );

            // Generate a random tracking number
            $tracking_number = substr(str_shuffle('958FJDNVXV8584773NCN5848FJJF35363813439864NMVMOPYR1234567'), 0, 6);

            // Create a new package instance and populate it with the request data
            $package = new Package;
            $package->user_id = $user->id; // Set user_id to the ID of the user in the users table
            $package->sender_name = $validatedData['sender_name'];
            $package->sender_email = $validatedData['sender_email'];
            $package->sender_address = $validatedData['sender_address'];
            $package->sender_phone = $validatedData['sender_phone'];
            $package->receiver_name = $validatedData['receiver_name'];
            $package->receiver_phone = $validatedData['receiver_phone'];
            $package->receiver_email = $validatedData['receiver_email'];
            $package->receiver_address = $validatedData['receiver_address'];
            $package->parcel_description = $validatedData['parcel_description'];
            $package->dispatch_location = $validatedData['dispatch_location'];
            $package->current_location = $validatedData['current_location'];
            $package->locale = $validatedData['locale'];
            $package->parcel_status = $validatedData['parcel_status'];
            $package->dispatch_date = $validatedData['dispatch_date'];
            $package->delivery_date = $validatedData['delivery_date'] ?? null;
            $package->tracking_number = $tracking_number;
            $package->save(); // Save the package data to the database



            // Uncomment the following line to send an email notification
            // Mail::to($email)->send(new ShipmentStartMail($userMessage));

            // Redirect back with a success message
            return back()->with('status', 'New Shipment Created Successfully');
        } catch (\Exception $e) {
            // Redirect back with an error message if an exception occurs
            return redirect()->back()->with('error', 'An error occurred while creating the shipment: ' . $e->getMessage())->withInput();
        }
    }

    public function updateShipment(Request $request, int $id)
    {
        // Ensure user is authenticated
        if (!Auth::check()) {
            return redirect('login')->with('error', 'You are not allowed to access');
        }

        // Validate the incoming request data
        $validatedData = $request->validate([
            'sender_name' => 'required|string|max:255',
            'sender_email' => 'required|email|max:255',
            'sender_address' => 'required|string|max:255',
            'sender_phone' => 'required|string|max:20',
            'receiver_name' => 'required|string|max:255',
            'receiver_phone' => 'required|string|max:20',
            'receiver_email' => 'required|email|max:255',
            'receiver_address' => 'required|string|max:255',
            'parcel_description' => 'required|string|max:500',
            'dispatch_location' => 'required|string|max:255',
            'current_location' => 'required|string|max:255',
            'parcel_status' => 'required|string|max:50',
            'dispatch_date' => 'required|date',
            'delivery_date' => 'nullable|date', // Optional delivery_date
            'locale' => 'nullable|string|max:1000000000000', // Optional locale
        ]);

        // Find the package by ID
        $package = Package::findOrFail($id);

        // Find or create the user by the sender's email
        $user = User::updateOrCreate(
            ['email' => $validatedData['sender_email']],
            [
                'name' => $validatedData['sender_name'],
                'phone' => $validatedData['sender_phone'],
                'address' => $validatedData['sender_address'],
            ]
        );

        // Update package details
        $package->update([
            'sender_name' => $validatedData['sender_name'],
            'sender_email' => $validatedData['sender_email'],
            'sender_address' => $validatedData['sender_address'],
            'receiver_name' => $validatedData['receiver_name'],
            'receiver_phone' => $validatedData['receiver_phone'],
            'receiver_email' => $validatedData['receiver_email'],
            'receiver_address' => $validatedData['receiver_address'],
            'parcel_description' => $validatedData['parcel_description'],
            'dispatch_location' => $validatedData['dispatch_location'],
            'current_location' => $validatedData['current_location'],
            'parcel_status' => $validatedData['parcel_status'],
            'dispatch_date' => $validatedData['dispatch_date'],
            'delivery_date' => $validatedData['delivery_date'], // Handle optional delivery_date
            'locale' => $validatedData['locale'], // Update locale field
            'user_id' => $user->id, // Associate the package with the correct user
        ]);

        // Redirect back with success message
        return redirect()->back()->with('status', 'Package Updated Successfully');
    }


    public function deletePackage($id)
    {


        $user  = Package::findOrFail($id);
        $user->delete();
        return back()->with('status', 'Package deleted Successfully');
    }



    public function editPackage($id)
    {
        if (Auth::check()) {
            // Fetch package along with user details
            $data['package'] = DB::table('packages')
                ->join('users', 'packages.user_id', '=', 'users.id')
                ->select('packages.*', 'users.name as user_name', 'users.phone as user_phone', 'users.email as user_email') // Select additional user fields as needed
                ->where('packages.id', $id)
                ->first();

            return view('dashboard.update_package', $data);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }




    public function sendMail(Request $request)

    {

        if (Auth::check()) {

            $email = $request->input('email');
            //$subject = $request->input('subject');
            $data = [
                'message' => $request->message,
                'subject' => $request->subject,
            ];


            Mail::to($email)->send(new sendUserEmail($data));

            return back()->with('status', 'Email Successfully sent');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function logOut()
    {
        Session::flush();
        Auth::logout();

        return redirect("login");
    }
}
