<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class CheckUserPackage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->user_type == 0) {
                $userId = $user->id;

                $package = Package::query()
                    ->join('users', 'packages.user_id', '=', 'users.id')
                    ->where('users.id', $userId)
                    ->select('packages.*')
                    ->first();

                if ($package) {
                    // Pass the package to the request object
                    $request->attributes->add(['package' => $package]);

                    // Prevent a redirect loop by checking the current route
                    if (!Route::is('package.user_view')) {
                        return redirect()->route('package.view', ['package' => $package]);
                    }

                    // Allow the request to proceed
                    return $next($request);
                } else {
                    // If no package is found, redirect back
                    return redirect()->back()->with('error', 'No package found for this user.');
                }
            } elseif ($user->user_type == 1) {
                // Fetch shipment data for dashboard
                $data['total_shipment_in_transit'] = Package::where('parcel_status', 'In Transit')->count();
                $data['total_shipment_on_hold'] = Package::where('parcel_status', 'On Hold')->count();
                $data['total_shipment_delivered'] = Package::where('parcel_status', 'Delivered')->count();
                $data['total_shipment_failed'] = Package::where('parcel_status', 'Failed')->count();

                // Redirect to the dashboard with the fetched data
                return response()->view('dashboard.home', $data);
            }
        }

        // Redirect to login if not authenticated or user type doesn't match
        return redirect('login')->with('error', 'You are not allowed to access');
    }
}
