<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Lwwcas\LaravelCountries\Models\Country;
use Rappasoft\LaravelLivewireTables\Traits\WithEvents;

class DatabaseSeeder extends Seeder
{


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
        // $random_country = $countries[array_rand($countries)];

        $countries = Country::all();
        $ghana = Country::where('international_phone', 233)->first();


        if (App::environment(['local', 'staging'])) {
            if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {

                // Call the php artisan migrate:fresh using Artisan
                $this->command->call('migrate:fresh');

                $this->command->line("Data cleared, starting from blank database.");
            }

            $this->call(\Lwwcas\LaravelCountries\Database\Seeders\LcDatabaseSeeder::class);
            $this->command->info("Countries Seeding Done!");

            $this->call([
                RolesPermissionSeeder::class
            ]);
            $this->command->info("Roles & Permissions Created!");


            $super_admin = User::factory()->create([
                'firstName' => 'Pius',
                'lastName' => 'Opoku-Fofie',
                'email' => 'webmaster@costrad.org',
                'email_verified_at' => now(),
                'password' => Hash::make('123Ghana'),
                'remember_token' => Str::random(10),
                'staff' => true,
                'ban' => false
            ]);
            $super_admin->profile()->create([
                'bio' => 'Update Admin bio',
                'lc_country_id' => $ghana->id,
            ]);

            $super_admin->assignRole('super_admin');
            $this->command->info("Admin User Creation Done");

            User::factory()->count(5)->has(
                Profile::factory()->state(function (array $attributes) use ( $countries) {
                    return [
                        'bio' => 'Factory Bio, Update bio',
                        'lc_country_id' => $countries->random()->id,
                    ];
                })
            )->create();

            $this->command->info("User Accounts Seeded");
            // User::factory()->count(12)->hasProfile()->create();
            // $this->command->info("User Accounts Seeded");


            $this->call([
                InstituteSeeder::class
            ]);

            $this->command->info("Institutes & College Seeded!");

            $this->call([
                CategorySeeder::class
            ]);
            $this->command->info("Category Items Seeded!");

            $this->call([
                AnnouncementSeeder::class
            ]);
            $this->command->info("Announcements Seeded!");


            $this->call([
                NewsroomSeeder::class
            ]);
            $this->command->info("News Items Seeded!");




        }
    }
}
