<x-guest-layout>
    <!-- Background Image -->
    <style>
        body {
            background-image: url('img/gallery/pic-1.jpg');
            /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            backdrop-filter: blur(5px);
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none;
            /* Hide all forms initially */
        }

        .form-container.active {
            display: block;
            /* Show the active form */
        }
    </style>

    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <!-- Step 1: Sender Information Form -->
        <div class="form-container active" id="form-step-1">
            <form method="POST" action="{{ route('register.sender') }}" id="sender-form">
                @csrf
                <h3 class="text-lg font-medium">{{ __('Step 1: Sender Information') }}</h3>

                <div class="mt-4">
                    <x-label for="sender_name" value="{{ __('Sender Name') }}" />
                    <x-input id="sender_name" class="block mt-1 w-full" type="text" name="sender_name"
                        :value="old('sender_name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="sender_email" value="{{ __('Sender Email') }}" />
                    <x-input id="sender_email" class="block mt-1 w-full" type="email" name="sender_email"
                        :value="old('sender_email')" required autocomplete="email" />
                </div>

                <div class="mt-4">
                    <x-label for="sender_address" value="{{ __('Sender Address') }}" />
                    <x-input id="sender_address" class="block mt-1 w-full" type="text" name="sender_address"
                        :value="old('sender_address')" required autocomplete="address" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ms-4" id="next-step-1">
                        {{ __('Next Step') }}
                    </x-button>
                </div>
            </form>
        </div>

        <!-- Step 2: Receiver Information Form -->
        <div class="form-container" id="form-step-2">
            <form method="POST" action="{{ route('register.receiver') }}" id="receiver-form">
                @csrf
                <h3 class="text-lg font-medium">{{ __('Step 2: Receiver Information') }}</h3>

                <div class="mt-4">
                    <x-label for="receiver_name" value="{{ __('Receiver Name') }}" />
                    <x-input id="receiver_name" class="block mt-1 w-full" type="text" name="receiver_name"
                        :value="old('receiver_name')" required autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="receiver_phone" value="{{ __('Receiver Phone') }}" />
                    <x-input id="receiver_phone" class="block mt-1 w-full" type="text" name="receiver_phone"
                        :value="old('receiver_phone')" required autocomplete="phone" />
                </div>

                <div class="mt-4">
                    <x-label for="receiver_email" value="{{ __('Receiver Email') }}" />
                    <x-input id="receiver_email" class="block mt-1 w-full" type="email" name="receiver_email"
                        :value="old('receiver_email')" required autocomplete="email" />
                </div>

                <div class="mt-4">
                    <x-label for="receiver_address" value="{{ __('Receiver Address') }}" />
                    <x-input id="receiver_address" class="block mt-1 w-full" type="text" name="receiver_address"
                        :value="old('receiver_address')" required autocomplete="address" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ms-4" id="next-step-2">
                        {{ __('Next Step') }}
                    </x-button>
                </div>
            </form>
        </div>

        <!-- Step 3: Parcel Information Form -->
        <div class="form-container" id="form-step-3">
            <form method="POST" action="{{ route('register.parcel') }}" id="parcel-form">
                @csrf
                <h3 class="text-lg font-medium">{{ __('Step 3: Parcel Information') }}</h3>

                <div class="mt-4">
                    <x-label for="parcel_description" value="{{ __('Parcel Description') }}" />
                    <x-input id="parcel_description" class="block mt-1 w-full" type="text" name="parcel_description"
                        :value="old('parcel_description')" required />
                </div>

                <div class="mt-4">
                    <x-label for="dispatch_location" value="{{ __('Dispatch Location') }}" />
                    <x-input id="dispatch_location" class="block mt-1 w-full" type="text" name="dispatch_location"
                        :value="old('dispatch_location')" required />
                </div>

                <div class="mt-4">
                    <x-label for="current_location" value="{{ __('Current Location') }}" />
                    <x-input id="current_location" class="block mt-1 w-full" type="text" name="current_location"
                        :value="old('current_location')" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ms-4" id="next-step-3">
                        {{ __('Next Step') }}
                    </x-button>
                </div>
            </form>
        </div>

        <!-- Step 4: Parcel Tracking Information Form -->
        <div class="form-container" id="form-step-4">
            <form method="POST" action="{{ route('register.tracking') }}" id="tracking-form">
                @csrf
                <h3 class="text-lg font-medium">{{ __('Step 4: Parcel Tracking Information') }}</h3>

                <div class="mt-4">
                    <x-label for="parcel_status" value="{{ __('Parcel Status') }}" />
                    <x-input id="parcel_status" class="block mt-1 w-full" type="text" name="parcel_status"
                        :value="old('parcel_status')" required />
                </div>

                <div class="mt-4">
                    <x-label for="dispatch_date" value="{{ __('Dispatch Date') }}" />
                    <x-input id="dispatch_date" class="block mt-1 w-full" type="date" name="dispatch_date"
                        :value="old('dispatch_date')" required />
                </div>

                <div class="mt-4">
                    <x-label for="tracking_number" value="{{ __('Tracking Number') }}" />
                    <x-input id="tracking_number" class="block mt-1 w-full" type="text" name="tracking_number"
                        :value="old('tracking_number')" required />
                </div>

                <!-- Terms and Conditions -->
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms
                                    of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy
                                    Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ms-4">
                        {{ __('Submit') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-authentication-card>

    <!-- JavaScript to Handle Form Transitions -->
    <script>
        document.getElementById('next-step-1').addEventListener('click', function(event) {
            event.preventDefault();
            if (validateForm('sender-form')) {
                showNextForm(2);
            }
        });

        document.getElementById('next-step-2').addEventListener('click', function(event) {
            event.preventDefault();
            if (validateForm('receiver-form')) {
                showNextForm(3);
            }
        });

        document.getElementById('next-step-3').addEventListener('click', function(event) {
            event.preventDefault();
            if (validateForm('parcel-form')) {
                showNextForm(4);
            }
        });

        function validateForm(formId) {
            const form = document.getElementById(formId);
            const inputs = form.querySelectorAll('input[required]');
            for (let input of inputs) {
                if (!input.value) {
                    alert('Please fill out all required fields.');
                    return false;
                }
            }
            return true;
        }

        function showNextForm(step) {
            const currentForm = document.querySelector('.form-container.active');
            currentForm.classList.remove('active');

            const nextForm = document.getElementById(`form-step-${step}`);
            nextForm.classList.add('active');
        }
    </script>
</x-guest-layout>