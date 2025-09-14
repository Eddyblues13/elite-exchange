<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;

class RegistrationController extends Controller
{
    // Step 1: Show Registration Form
    public function showRegistrationForm()
    {
        return view('auth.register'); // Assuming your blade file is at resources/views/auth/register.blade.php
    }

    // Step 2: Store Sender Information
    public function storeSender(Request $request)
    {
        $request->validate([
            'sender_name' => 'required|string|max:255',
            'sender_email' => 'required|string|email|max:255',
            'sender_address' => 'required|string|max:255',
        ]);

        // Save sender details to session or a temporary storage
        session([
            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'sender_address' => $request->sender_address,
        ]);

        return redirect()->route('register.receiver');
    }

    // Step 3: Store Receiver Information
    public function storeReceiver(Request $request)
    {
        $request->validate([
            'receiver_name' => 'required|string|max:255',
            'receiver_phone' => 'required|string|max:20',
            'receiver_email' => 'required|string|email|max:255',
            'receiver_address' => 'required|string|max:255',
        ]);

        // Save receiver details to session or a temporary storage
        session([
            'receiver_name' => $request->receiver_name,
            'receiver_phone' => $request->receiver_phone,
            'receiver_email' => $request->receiver_email,
            'receiver_address' => $request->receiver_address,
        ]);

        return redirect()->route('register.parcel');
    }

    // Step 4: Store Parcel Information
    public function storeParcel(Request $request)
    {
        $request->validate([
            'parcel_description' => 'required|string|max:255',
            'dispatch_location' => 'required|string|max:255',
            'current_location' => 'required|string|max:255',
        ]);

        // Save parcel details to session or a temporary storage
        session([
            'parcel_description' => $request->parcel_description,
            'dispatch_location' => $request->dispatch_location,
            'current_location' => $request->current_location,
        ]);

        return redirect()->route('register.tracking');
    }

    // Step 5: Store Tracking Information and Create User
    public function storeTracking(Request $request)
    {
        $request->validate([
            'parcel_status' => 'required|string|max:255',
            'dispatch_date' => 'required|date',
            'tracking_number' => 'required|string|max:255',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ]);

        // Gather all information from session
        $data = array_merge(session()->all(), $request->all());

        // Create new user or save data to the database
        $user = User::create([
            'name' => $data['sender_name'],
            'email' => $data['sender_email'],
            'password' => Hash::make($request->password), // Adjust if you handle password input differently
        ]);

        // Save additional details to user's profile or related models
        // Example: Save parcel tracking, sender, and receiver info to the appropriate models

        // Clear the session data
        session()->forget(['sender_name', 'sender_email', 'sender_address', 'receiver_name', 'receiver_phone', 'receiver_email', 'receiver_address', 'parcel_description', 'dispatch_location', 'current_location']);

        // Redirect or return success response
        return redirect()->route('dashboard')->with('success', 'Registration completed successfully.');
    }
}
