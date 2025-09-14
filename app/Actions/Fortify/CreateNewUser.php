<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Package;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Carbon\Carbon;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // Validate the input
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:15'],
            'age' => ['required', 'integer', 'min:0'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'parcel_description' => ['required', 'string', 'max:500'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // Create the user
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'age' => $input['age'],
            'address' => $input['address'],
            'country' => $input['country'],
            'password' => Hash::make($input['password']),
        ]);
        // Generate a unique tracking number
        $trackingNumber = Str::upper(Str::random(10));
        $map = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3114.019072726565!2d-121.59138652560037!3d38.69440615865851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809b2b73ce6a70ad%3A0xa460901228ef4232!2sSacramento%20International%20Airport!5e0!3m2!1sen!2sng!4v1725555032742!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        // Save the parcel description in the Parcel model
        Package::create([
            'user_id' => $user->id,
            'parcel_description' => $input['parcel_description'],
            'receiver_email' => $input['email'],
            'receiver_name' => $input['name'],
            'receiver_address' => $input['address'],
            'current_location' => 'United States',
            'dispatch_location' => $input['country'],
            'receiver_phone' => $input['phone'],
            'parcel_status' => 'In Transit',
            'dispatch_date' => Carbon::now(),
            'delivery_date' => Carbon::now()->addDays(5), 
            'sender_name' => 'SHERYLL GOEDERT',
            'locale' => $map,
            'tracking_number' => $trackingNumber,
        ]);

        return $user;
    }
}
