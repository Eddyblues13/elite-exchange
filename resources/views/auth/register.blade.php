<x-guest-layout>
    <!-- Add Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Other head content -->
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}"
            class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg mx-auto">
            @csrf

            <!-- Full Name -->
            <div class="mt-4">
                <x-label for="name" value="{{ __('Full Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email Address') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autocomplete="username" />
            </div>
            
            <!-- Country -->
<div class="mt-4">
    <x-label for="country" value="{{ __('Country') }}" />
    <select id="country" name="country" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        <option value="">{{ __('Select Country') }}</option>
        <option value="Afghanistan" {{ old('country') == 'Afghanistan' ? 'selected' : '' }}>{{ __('Afghanistan') }}</option>
        <option value="Albania" {{ old('country') == 'Albania' ? 'selected' : '' }}>{{ __('Albania') }}</option>
        <option value="Algeria" {{ old('country') == 'Algeria' ? 'selected' : '' }}>{{ __('Algeria') }}</option>
        <option value="American Samoa" {{ old('country') == 'American Samoa' ? 'selected' : '' }}>{{ __('American Samoa') }}</option>
        <option value="Andorra" {{ old('country') == 'Andorra' ? 'selected' : '' }}>{{ __('Andorra') }}</option>
        <option value="Angola" {{ old('country') == 'Angola' ? 'selected' : '' }}>{{ __('Angola') }}</option>
        <option value="Anguilla" {{ old('country') == 'Anguilla' ? 'selected' : '' }}>{{ __('Anguilla') }}</option>
        <option value="Antarctica" {{ old('country') == 'Antarctica' ? 'selected' : '' }}>{{ __('Antarctica') }}</option>
        <option value="Antigua and Barbuda" {{ old('country') == 'Antigua and Barbuda' ? 'selected' : '' }}>{{ __('Antigua and Barbuda') }}</option>
        <option value="Argentina" {{ old('country') == 'Argentina' ? 'selected' : '' }}>{{ __('Argentina') }}</option>
        <option value="Armenia" {{ old('country') == 'Armenia' ? 'selected' : '' }}>{{ __('Armenia') }}</option>
        <option value="Aruba" {{ old('country') == 'Aruba' ? 'selected' : '' }}>{{ __('Aruba') }}</option>
        <option value="Australia" {{ old('country') == 'Australia' ? 'selected' : '' }}>{{ __('Australia') }}</option>
        <option value="Austria" {{ old('country') == 'Austria' ? 'selected' : '' }}>{{ __('Austria') }}</option>
        <option value="Azerbaijan" {{ old('country') == 'Azerbaijan' ? 'selected' : '' }}>{{ __('Azerbaijan') }}</option>
        <option value="Bahamas" {{ old('country') == 'Bahamas' ? 'selected' : '' }}>{{ __('Bahamas') }}</option>
        <option value="Bahrain" {{ old('country') == 'Bahrain' ? 'selected' : '' }}>{{ __('Bahrain') }}</option>
        <option value="Bangladesh" {{ old('country') == 'Bangladesh' ? 'selected' : '' }}>{{ __('Bangladesh') }}</option>
        <option value="Barbados" {{ old('country') == 'Barbados' ? 'selected' : '' }}>{{ __('Barbados') }}</option>
        <option value="Belarus" {{ old('country') == 'Belarus' ? 'selected' : '' }}>{{ __('Belarus') }}</option>
        <option value="Belgium" {{ old('country') == 'Belgium' ? 'selected' : '' }}>{{ __('Belgium') }}</option>
        <option value="Belize" {{ old('country') == 'Belize' ? 'selected' : '' }}>{{ __('Belize') }}</option>
        <option value="Benin" {{ old('country') == 'Benin' ? 'selected' : '' }}>{{ __('Benin') }}</option>
        <option value="Bermuda" {{ old('country') == 'Bermuda' ? 'selected' : '' }}>{{ __('Bermuda') }}</option>
        <option value="Bhutan" {{ old('country') == 'Bhutan' ? 'selected' : '' }}>{{ __('Bhutan') }}</option>
        <option value="Bolivia" {{ old('country') == 'Bolivia' ? 'selected' : '' }}>{{ __('Bolivia') }}</option>
        <option value="Bosnia and Herzegovina" {{ old('country') == 'Bosnia and Herzegovina' ? 'selected' : '' }}>{{ __('Bosnia and Herzegovina') }}</option>
        <option value="Botswana" {{ old('country') == 'Botswana' ? 'selected' : '' }}>{{ __('Botswana') }}</option>
        <option value="Brazil" {{ old('country') == 'Brazil' ? 'selected' : '' }}>{{ __('Brazil') }}</option>
        <option value="Brunei Darussalam" {{ old('country') == 'Brunei Darussalam' ? 'selected' : '' }}>{{ __('Brunei Darussalam') }}</option>
        <option value="Bulgaria" {{ old('country') == 'Bulgaria' ? 'selected' : '' }}>{{ __('Bulgaria') }}</option>
        <option value="Burkina Faso" {{ old('country') == 'Burkina Faso' ? 'selected' : '' }}>{{ __('Burkina Faso') }}</option>
        <option value="Burundi" {{ old('country') == 'Burundi' ? 'selected' : '' }}>{{ __('Burundi') }}</option>
        <option value="Cabo Verde" {{ old('country') == 'Cabo Verde' ? 'selected' : '' }}>{{ __('Cabo Verde') }}</option>
        <option value="Cambodia" {{ old('country') == 'Cambodia' ? 'selected' : '' }}>{{ __('Cambodia') }}</option>
        <option value="Cameroon" {{ old('country') == 'Cameroon' ? 'selected' : '' }}>{{ __('Cameroon') }}</option>
        <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>{{ __('Canada') }}</option>
        <option value="Cayman Islands" {{ old('country') == 'Cayman Islands' ? 'selected' : '' }}>{{ __('Cayman Islands') }}</option>
        <option value="Central African Republic" {{ old('country') == 'Central African Republic' ? 'selected' : '' }}>{{ __('Central African Republic') }}</option>
        <option value="Chad" {{ old('country') == 'Chad' ? 'selected' : '' }}>{{ __('Chad') }}</option>
        <option value="Chile" {{ old('country') == 'Chile' ? 'selected' : '' }}>{{ __('Chile') }}</option>
        <option value="China" {{ old('country') == 'China' ? 'selected' : '' }}>{{ __('China') }}</option>
        <option value="Colombia" {{ old('country') == 'Colombia' ? 'selected' : '' }}>{{ __('Colombia') }}</option>
        <option value="Comoros" {{ old('country') == 'Comoros' ? 'selected' : '' }}>{{ __('Comoros') }}</option>
        <option value="Congo" {{ old('country') == 'Congo' ? 'selected' : '' }}>{{ __('Congo') }}</option>
        <option value="Congo, Democratic Republic of the" {{ old('country') == 'Congo, Democratic Republic of the' ? 'selected' : '' }}>{{ __('Congo, Democratic Republic of the') }}</option>
        <option value="Costa Rica" {{ old('country') == 'Costa Rica' ? 'selected' : '' }}>{{ __('Costa Rica') }}</option>
        <option value="Côte d'Ivoire" {{ old('country') == 'Côte d\'Ivoire' ? 'selected' : '' }}>{{ __('Côte d\'Ivoire') }}</option>
        <option value="Croatia" {{ old('country') == 'Croatia' ? 'selected' : '' }}>{{ __('Croatia') }}</option>
        <option value="Cuba" {{ old('country') == 'Cuba' ? 'selected' : '' }}>{{ __('Cuba') }}</option>
        <option value="Cyprus" {{ old('country') == 'Cyprus' ? 'selected' : '' }}>{{ __('Cyprus') }}</option>
        <option value="Czech Republic" {{ old('country') == 'Czech Republic' ? 'selected' : '' }}>{{ __('Czech Republic') }}</option>
        <option value="Denmark" {{ old('country') == 'Denmark' ? 'selected' : '' }}>{{ __('Denmark') }}</option>
        <option value="Djibouti" {{ old('country') == 'Djibouti' ? 'selected' : '' }}>{{ __('Djibouti') }}</option>
        <option value="Dominica" {{ old('country') == 'Dominica' ? 'selected' : '' }}>{{ __('Dominica') }}</option>
        <option value="Dominican Republic" {{ old('country') == 'Dominican Republic' ? 'selected' : '' }}>{{ __('Dominican Republic') }}</option>
        <option value="Ecuador" {{ old('country') == 'Ecuador' ? 'selected' : '' }}>{{ __('Ecuador') }}</option>
        <option value="Egypt" {{ old('country') == 'Egypt' ? 'selected' : '' }}>{{ __('Egypt') }}</option>
        <option value="El Salvador" {{ old('country') == 'El Salvador' ? 'selected' : '' }}>{{ __('El Salvador') }}</option>
        <option value="Equatorial Guinea" {{ old('country') == 'Equatorial Guinea' ? 'selected' : '' }}>{{ __('Equatorial Guinea') }}</option>
        <option value="Eritrea" {{ old('country') == 'Eritrea' ? 'selected' : '' }}>{{ __('Eritrea') }}</option>
        <option value="Estonia" {{ old('country') == 'Estonia' ? 'selected' : '' }}>{{ __('Estonia') }}</option>
        <option value="Eswatini" {{ old('country') == 'Eswatini' ? 'selected' : '' }}>{{ __('Eswatini') }}</option>
        <option value="Ethiopia" {{ old('country') == 'Ethiopia' ? 'selected' : '' }}>{{ __('Ethiopia') }}</option>
        <option value="Fiji" {{ old('country') == 'Fiji' ? 'selected' : '' }}>{{ __('Fiji') }}</option>
        <option value="Finland" {{ old('country') == 'Finland' ? 'selected' : '' }}>{{ __('Finland') }}</option>
        <option value="France" {{ old('country') == 'France' ? 'selected' : '' }}>{{ __('France') }}</option>
        <option value="Gabon" {{ old('country') == 'Gabon' ? 'selected' : '' }}>{{ __('Gabon') }}</option>
        <option value="Gambia" {{ old('country') == 'Gambia' ? 'selected' : '' }}>{{ __('Gambia') }}</option>
        <option value="Georgia" {{ old('country') == 'Georgia' ? 'selected' : '' }}>{{ __('Georgia') }}</option>
        <option value="Germany" {{ old('country') == 'Germany' ? 'selected' : '' }}>{{ __('Germany') }}</option>
        <option value="Ghana" {{ old('country') == 'Ghana' ? 'selected' : '' }}>{{ __('Ghana') }}</option>
        <option value="Greece" {{ old('country') == 'Greece' ? 'selected' : '' }}>{{ __('Greece') }}</option>
        <option value="Grenada" {{ old('country') == 'Grenada' ? 'selected' : '' }}>{{ __('Grenada') }}</option>
        <option value="Guatemala" {{ old('country') == 'Guatemala' ? 'selected' : '' }}>{{ __('Guatemala') }}</option>
        <option value="Guinea" {{ old('country') == 'Guinea' ? 'selected' : '' }}>{{ __('Guinea') }}</option>
        <option value="Guinea-Bissau" {{ old('country') == 'Guinea-Bissau' ? 'selected' : '' }}>{{ __('Guinea-Bissau') }}</option>
        <option value="Guyana" {{ old('country') == 'Guyana' ? 'selected' : '' }}>{{ __('Guyana') }}</option>
        <option value="Haiti" {{ old('country') == 'Haiti' ? 'selected' : '' }}>{{ __('Haiti') }}</option>
        <option value="Honduras" {{ old('country') == 'Honduras' ? 'selected' : '' }}>{{ __('Honduras') }}</option>
        <option value="Hungary" {{ old('country') == 'Hungary' ? 'selected' : '' }}>{{ __('Hungary') }}</option>
        <option value="Iceland" {{ old('country') == 'Iceland' ? 'selected' : '' }}>{{ __('Iceland') }}</option>
        <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>{{ __('India') }}</option>
        <option value="Indonesia" {{ old('country') == 'Indonesia' ? 'selected' : '' }}>{{ __('Indonesia') }}</option>
        <option value="Iran" {{ old('country') == 'Iran' ? 'selected' : '' }}>{{ __('Iran') }}</option>
        <option value="Iraq" {{ old('country') == 'Iraq' ? 'selected' : '' }}>{{ __('Iraq') }}</option>
        <option value="Ireland" {{ old('country') == 'Ireland' ? 'selected' : '' }}>{{ __('Ireland') }}</option>
        <option value="Israel" {{ old('country') == 'Israel' ? 'selected' : '' }}>{{ __('Israel') }}</option>
        <option value="Italy" {{ old('country') == 'Italy' ? 'selected' : '' }}>{{ __('Italy') }}</option>
        <option value="Jamaica" {{ old('country') == 'Jamaica' ? 'selected' : '' }}>{{ __('Jamaica') }}</option>
        <option value="Japan" {{ old('country') == 'Japan' ? 'selected' : '' }}>{{ __('Japan') }}</option>
        <option value="Jordan" {{ old('country') == 'Jordan' ? 'selected' : '' }}>{{ __('Jordan') }}</option>
        <option value="Kazakhstan" {{ old('country') == 'Kazakhstan' ? 'selected' : '' }}>{{ __('Kazakhstan') }}</option>
        <option value="Kenya" {{ old('country') == 'Kenya' ? 'selected' : '' }}>{{ __('Kenya') }}</option>
        <option value="Kiribati" {{ old('country') == 'Kiribati' ? 'selected' : '' }}>{{ __('Kiribati') }}</option>
        <option value="Kuwait" {{ old('country') == 'Kuwait' ? 'selected' : '' }}>{{ __('Kuwait') }}</option>
        <option value="Kyrgyzstan" {{ old('country') == 'Kyrgyzstan' ? 'selected' : '' }}>{{ __('Kyrgyzstan') }}</option>
        <option value="Lao People's Democratic Republic" {{ old('country') == 'Lao People\'s Democratic Republic' ? 'selected' : '' }}>{{ __('Lao People\'s Democratic Republic') }}</option>
        <option value="Latvia" {{ old('country') == 'Latvia' ? 'selected' : '' }}>{{ __('Latvia') }}</option>
        <option value="Lebanon" {{ old('country') == 'Lebanon' ? 'selected' : '' }}>{{ __('Lebanon') }}</option>
        <option value="Lesotho" {{ old('country') == 'Lesotho' ? 'selected' : '' }}>{{ __('Lesotho') }}</option>
        <option value="Liberia" {{ old('country') == 'Liberia' ? 'selected' : '' }}>{{ __('Liberia') }}</option>
        <option value="Libya" {{ old('country') == 'Libya' ? 'selected' : '' }}>{{ __('Libya') }}</option>
        <option value="Liechtenstein" {{ old('country') == 'Liechtenstein' ? 'selected' : '' }}>{{ __('Liechtenstein') }}</option>
        <option value="Lithuania" {{ old('country') == 'Lithuania' ? 'selected' : '' }}>{{ __('Lithuania') }}</option>
        <option value="Luxembourg" {{ old('country') == 'Luxembourg' ? 'selected' : '' }}>{{ __('Luxembourg') }}</option>
        <option value="Madagascar" {{ old('country') == 'Madagascar' ? 'selected' : '' }}>{{ __('Madagascar') }}</option>
        <option value="Malawi" {{ old('country') == 'Malawi' ? 'selected' : '' }}>{{ __('Malawi') }}</option>
        <option value="Malaysia" {{ old('country') == 'Malaysia' ? 'selected' : '' }}>{{ __('Malaysia') }}</option>
        <option value="Maldives" {{ old('country') == 'Maldives' ? 'selected' : '' }}>{{ __('Maldives') }}</option>
        <option value="Mali" {{ old('country') == 'Mali' ? 'selected' : '' }}>{{ __('Mali') }}</option>
        <option value="Malta" {{ old('country') == 'Malta' ? 'selected' : '' }}>{{ __('Malta') }}</option>
        <option value="Marshall Islands" {{ old('country') == 'Marshall Islands' ? 'selected' : '' }}>{{ __('Marshall Islands') }}</option>
        <option value="Mauritania" {{ old('country') == 'Mauritania' ? 'selected' : '' }}>{{ __('Mauritania') }}</option>
        <option value="Mauritius" {{ old('country') == 'Mauritius' ? 'selected' : '' }}>{{ __('Mauritius') }}</option>
        <option value="Mexico" {{ old('country') == 'Mexico' ? 'selected' : '' }}>{{ __('Mexico') }}</option>
        <option value="Micronesia (Federated States of)" {{ old('country') == 'Micronesia (Federated States of)' ? 'selected' : '' }}>{{ __('Micronesia (Federated States of)') }}</option>
        <option value="Moldova" {{ old('country') == 'Moldova' ? 'selected' : '' }}>{{ __('Moldova') }}</option>
        <option value="Monaco" {{ old('country') == 'Monaco' ? 'selected' : '' }}>{{ __('Monaco') }}</option>
        <option value="Mongolia" {{ old('country') == 'Mongolia' ? 'selected' : '' }}>{{ __('Mongolia') }}</option>
        <option value="Montenegro" {{ old('country') == 'Montenegro' ? 'selected' : '' }}>{{ __('Montenegro') }}</option>
        <option value="Morocco" {{ old('country') == 'Morocco' ? 'selected' : '' }}>{{ __('Morocco') }}</option>
        <option value="Mozambique" {{ old('country') == 'Mozambique' ? 'selected' : '' }}>{{ __('Mozambique') }}</option>
        <option value="Myanmar" {{ old('country') == 'Myanmar' ? 'selected' : '' }}>{{ __('Myanmar') }}</option>
        <option value="Namibia" {{ old('country') == 'Namibia' ? 'selected' : '' }}>{{ __('Namibia') }}</option>
        <option value="Nauru" {{ old('country') == 'Nauru' ? 'selected' : '' }}>{{ __('Nauru') }}</option>
        <option value="Nepal" {{ old('country') == 'Nepal' ? 'selected' : '' }}>{{ __('Nepal') }}</option>
        <option value="Netherlands" {{ old('country') == 'Netherlands' ? 'selected' : '' }}>{{ __('Netherlands') }}</option>
        <option value="New Zealand" {{ old('country') == 'New Zealand' ? 'selected' : '' }}>{{ __('New Zealand') }}</option>
        <option value="Nicaragua" {{ old('country') == 'Nicaragua' ? 'selected' : '' }}>{{ __('Nicaragua') }}</option>
        <option value="Niger" {{ old('country') == 'Niger' ? 'selected' : '' }}>{{ __('Niger') }}</option>
        <option value="Nigeria" {{ old('country') == 'Nigeria' ? 'selected' : '' }}>{{ __('Nigeria') }}</option>
        <option value="North Macedonia" {{ old('country') == 'North Macedonia' ? 'selected' : '' }}>{{ __('North Macedonia') }}</option>
        <option value="Norway" {{ old('country') == 'Norway' ? 'selected' : '' }}>{{ __('Norway') }}</option>
        <option value="Oman" {{ old('country') == 'Oman' ? 'selected' : '' }}>{{ __('Oman') }}</option>
        <option value="Pakistan" {{ old('country') == 'Pakistan' ? 'selected' : '' }}>{{ __('Pakistan') }}</option>
        <option value="Palau" {{ old('country') == 'Palau' ? 'selected' : '' }}>{{ __('Palau') }}</option>
        <option value="Panama" {{ old('country') == 'Panama' ? 'selected' : '' }}>{{ __('Panama') }}</option>
        <option value="Papua New Guinea" {{ old('country') == 'Papua New Guinea' ? 'selected' : '' }}>{{ __('Papua New Guinea') }}</option>
        <option value="Paraguay" {{ old('country') == 'Paraguay' ? 'selected' : '' }}>{{ __('Paraguay') }}</option>
        <option value="Peru" {{ old('country') == 'Peru' ? 'selected' : '' }}>{{ __('Peru') }}</option>
        <option value="Philippines" {{ old('country') == 'Philippines' ? 'selected' : '' }}>{{ __('Philippines') }}</option>
        <option value="Poland" {{ old('country') == 'Poland' ? 'selected' : '' }}>{{ __('Poland') }}</option>
        <option value="Portugal" {{ old('country') == 'Portugal' ? 'selected' : '' }}>{{ __('Portugal') }}</option>
        <option value="Qatar" {{ old('country') == 'Qatar' ? 'selected' : '' }}>{{ __('Qatar') }}</option>
        <option value="Romania" {{ old('country') == 'Romania' ? 'selected' : '' }}>{{ __('Romania') }}</option>
        <option value="Russian Federation" {{ old('country') == 'Russian Federation' ? 'selected' : '' }}>{{ __('Russian Federation') }}</option>
        <option value="Rwanda" {{ old('country') == 'Rwanda' ? 'selected' : '' }}>{{ __('Rwanda') }}</option>
        <option value="Saint Kitts and Nevis" {{ old('country') == 'Saint Kitts and Nevis' ? 'selected' : '' }}>{{ __('Saint Kitts and Nevis') }}</option>
        <option value="Saint Lucia" {{ old('country') == 'Saint Lucia' ? 'selected' : '' }}>{{ __('Saint Lucia') }}</option>
        <option value="Saint Vincent and the Grenadines" {{ old('country') == 'Saint Vincent and the Grenadines' ? 'selected' : '' }}>{{ __('Saint Vincent and the Grenadines') }}</option>
        <option value="Samoa" {{ old('country') == 'Samoa' ? 'selected' : '' }}>{{ __('Samoa') }}</option>
        <option value="San Marino" {{ old('country') == 'San Marino' ? 'selected' : '' }}>{{ __('San Marino') }}</option>
        <option value="Sao Tome and Principe" {{ old('country') == 'Sao Tome and Principe' ? 'selected' : '' }}>{{ __('Sao Tome and Principe') }}</option>
        <option value="Saudi Arabia" {{ old('country') == 'Saudi Arabia' ? 'selected' : '' }}>{{ __('Saudi Arabia') }}</option>
        <option value="Senegal" {{ old('country') == 'Senegal' ? 'selected' : '' }}>{{ __('Senegal') }}</option>
        <option value="Serbia" {{ old('country') == 'Serbia' ? 'selected' : '' }}>{{ __('Serbia') }}</option>
        <option value="Seychelles" {{ old('country') == 'Seychelles' ? 'selected' : '' }}>{{ __('Seychelles') }}</option>
        <option value="Sierra Leone" {{ old('country') == 'Sierra Leone' ? 'selected' : '' }}>{{ __('Sierra Leone') }}</option>
        <option value="Singapore" {{ old('country') == 'Singapore' ? 'selected' : '' }}>{{ __('Singapore') }}</option>
        <option value="Slovakia" {{ old('country') == 'Slovakia' ? 'selected' : '' }}>{{ __('Slovakia') }}</option>
        <option value="Slovenia" {{ old('country') == 'Slovenia' ? 'selected' : '' }}>{{ __('Slovenia') }}</option>
        <option value="Solomon Islands" {{ old('country') == 'Solomon Islands' ? 'selected' : '' }}>{{ __('Solomon Islands') }}</option>
        <option value="Somalia" {{ old('country') == 'Somalia' ? 'selected' : '' }}>{{ __('Somalia') }}</option>
        <option value="South Africa" {{ old('country') == 'South Africa' ? 'selected' : '' }}>{{ __('South Africa') }}</option>
        <option value="South Sudan" {{ old('country') == 'South Sudan' ? 'selected' : '' }}>{{ __('South Sudan') }}</option>
        <option value="Spain" {{ old('country') == 'Spain' ? 'selected' : '' }}>{{ __('Spain') }}</option>
        <option value="Sri Lanka" {{ old('country') == 'Sri Lanka' ? 'selected' : '' }}>{{ __('Sri Lanka') }}</option>
        <option value="Sudan" {{ old('country') == 'Sudan' ? 'selected' : '' }}>{{ __('Sudan') }}</option>
        <option value="Suriname" {{ old('country') == 'Suriname' ? 'selected' : '' }}>{{ __('Suriname') }}</option>
        <option value="Sweden" {{ old('country') == 'Sweden' ? 'selected' : '' }}>{{ __('Sweden') }}</option>
        <option value="Switzerland" {{ old('country') == 'Switzerland' ? 'selected' : '' }}>{{ __('Switzerland') }}</option>
        <option value="Syrian Arab Republic" {{ old('country') == 'Syrian Arab Republic' ? 'selected' : '' }}>{{ __('Syrian Arab Republic') }}</option>
        <option value="Tajikistan" {{ old('country') == 'Tajikistan' ? 'selected' : '' }}>{{ __('Tajikistan') }}</option>
        <option value="Tanzania" {{ old('country') == 'Tanzania' ? 'selected' : '' }}>{{ __('Tanzania') }}</option>
        <option value="Thailand" {{ old('country') == 'Thailand' ? 'selected' : '' }}>{{ __('Thailand') }}</option>
        <option value="Timor-Leste" {{ old('country') == 'Timor-Leste' ? 'selected' : '' }}>{{ __('Timor-Leste') }}</option>
        <option value="Togo" {{ old('country') == 'Togo' ? 'selected' : '' }}>{{ __('Togo') }}</option>
        <option value="Tonga" {{ old('country') == 'Tonga' ? 'selected' : '' }}>{{ __('Tonga') }}</option>
        <option value="Trinidad and Tobago" {{ old('country') == 'Trinidad and Tobago' ? 'selected' : '' }}>{{ __('Trinidad and Tobago') }}</option>
        <option value="Tunisia" {{ old('country') == 'Tunisia' ? 'selected' : '' }}>{{ __('Tunisia') }}</option>
        <option value="Turkey" {{ old('country') == 'Turkey' ? 'selected' : '' }}>{{ __('Turkey') }}</option>
        <option value="Turkmenistan" {{ old('country') == 'Turkmenistan' ? 'selected' : '' }}>{{ __('Turkmenistan') }}</option>
        <option value="Tuvalu" {{ old('country') == 'Tuvalu' ? 'selected' : '' }}>{{ __('Tuvalu') }}</option>
        <option value="Uganda" {{ old('country') == 'Uganda' ? 'selected' : '' }}>{{ __('Uganda') }}</option>
        <option value="Ukraine" {{ old('country') == 'Ukraine' ? 'selected' : '' }}>{{ __('Ukraine') }}</option>
        <option value="United Arab Emirates" {{ old('country') == 'United Arab Emirates' ? 'selected' : '' }}>{{ __('United Arab Emirates') }}</option>
        <option value="United Kingdom of Great Britain and Northern Ireland" {{ old('country') == 'United Kingdom of Great Britain and Northern Ireland' ? 'selected' : '' }}>{{ __('United Kingdom of Great Britain and Northern Ireland') }}</option>
        <option value="United States of America" {{ old('country') == 'United States of America' ? 'selected' : '' }}>{{ __('United States of America') }}</option>
        <option value="Uruguay" {{ old('country') == 'Uruguay' ? 'selected' : '' }}>{{ __('Uruguay') }}</option>
        <option value="Uzbekistan" {{ old('country') == 'Uzbekistan' ? 'selected' : '' }}>{{ __('Uzbekistan') }}</option>
        <option value="Vanuatu" {{ old('country') == 'Vanuatu' ? 'selected' : '' }}>{{ __('Vanuatu') }}</option>
        <option value="Venezuela" {{ old('country') == 'Venezuela' ? 'selected' : '' }}>{{ __('Venezuela') }}</option>
        <option value="Viet Nam" {{ old('country') == 'Viet Nam' ? 'selected' : '' }}>{{ __('Viet Nam') }}</option>
        <option value="Yemen" {{ old('country') == 'Yemen' ? 'selected' : '' }}>{{ __('Yemen') }}</option>
        <option value="Zambia" {{ old('country') == 'Zambia' ? 'selected' : '' }}>{{ __('Zambia') }}</option>
        <option value="Zimbabwe" {{ old('country') == 'Zimbabwe' ? 'selected' : '' }}>{{ __('Zimbabwe') }}</option>
    </select>

  </div>


            <!-- Phone Number -->
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone Number') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required
                    autocomplete="tel" />
            </div>

            <!-- Age -->
            <div class="mt-4">
                <x-label for="age" value="{{ __('Age') }}" />
                <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required
                    min="0" />
            </div>

            <!-- Home Address -->
            <div class="mt-4">
                <x-label for="address" value="{{ __('Home Address') }}" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                    required autocomplete="street-address" />
            </div>

            <!-- Parcel Description -->
            <div class="mt-4">
                <x-label for="parcel_description" value="{{ __('Parcel Description') }}" />
                <textarea id="parcel_description"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    name="parcel_description" required>{{ old('parcel_description') }}</textarea>
            </div>

            <!-- Password -->
            <div class="mt-4 relative">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full pr-10" type="password" name="password" required
                    autocomplete="new-password" />
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                    onclick="togglePasswordVisibility('password')">
                    <i class="far fa-eye" id="togglePassword"></i>
                </span>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 relative">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full pr-10" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                    onclick="togglePasswordVisibility('password_confirmation')">
                    <i class="far fa-eye" id="togglePasswordConfirmation"></i>
                </span>
            </div>

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

            <div class="flex items-center justify-end mt-6">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>

    <!-- Background Image -->
    <style>
        body {
            background: url('your-faint-background-image-url.jpg') no-repeat center center fixed;
            background-size: cover;
            background-blend-mode: lighten;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9);
        }
    </style>

    <!-- JavaScript to Toggle Password Visibility -->
    <script>
        function togglePasswordVisibility(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = field.nextElementSibling.querySelector('i');

            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</x-guest-layout>