<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Newsroom;
use App\Models\Institute;
use App\Models\Transaction;
use Spatie\Analytics\Period;
use Illuminate\Support\HtmlString;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Analytics\Facades\Analytics;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\ContactController;
use Lwwcas\LaravelCountries\Models\Country;
use App\Http\Controllers\NewsroomController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DisplayInstituteController;

Route::get('banned', function () {
    return view('auth.banned');
})->name('banned')->middleware('auth');

Route::get('auth/google', [App\Http\Controllers\LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\LoginController::class, 'handleGoogleCallback']);


Route::post('/donation', [App\Http\Controllers\PaymentController::class, 'donationGateway'])
    ->name('donation');

Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])
    ->name('pay')
    ->middleware('auth', 'preventduplicatetransaction');

Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback'])
    ->name('payment')
    ->middleware('verifyWebhookIP');

// end payment



Route::get('test6', function () {

    // $period = Period::create(Carbon::now()->startOfYear(), Carbon::today());
    // $data = Analytics::fetchTotalVisitorsAndPageViews($period);
    // $totalSessions = $data->sum('screenPageViews');
    // return $totalSessions;
    $institute = Institute::whereAcronym('iea')->first();
    dd($institute->progress);
})->middleware('auth');


Route::get('test4', function () {

    // Specify the start and end dates for the period you want to fetch data
    $startDate = now()->subMonths(1);
    $endDate = now();

    // Fetch page views for the specified period
    $pageViews = Analytics::fetchTopBrowsers(Period::create($startDate, $endDate));

    // Get the total page views
    $totalPageViews = $pageViews->sum('screenPageViews');

    // Output the result
    echo "Total Page Views: " . $pageViews['browser'];
})->middleware('auth');




Route::get('/test9', function () {
    // used to get days since beginning of the month
    $myStartDate = new Carbon('first day of this month');
    $endDate = Carbon::now();

    $startDate = Carbon::createFromDate(2021, 1, 1);
    $period = Period::create($startDate, $endDate);

    // $live_users = Analytics::getAnalyticsService()
    // ->data_realtime
    // ->get('ga:'.env('ANALYTICS_VIEW_ID'), 'rt:activeVisitors')
    // ->totalsForAllResults['rt:activeVisitors'];

    $pages = Analytics::fetchMostVisitedPages($period)->max();
    // $total_visitors = Analytics::newUsers(Period::days(31));
    $visitors = Analytics::totalVisits(Period::months(1))->pluck('pageViews')->sum();
    $totalThisMonth = Analytics::totalVisits(Period::days($myStartDate->diffInDays()))->pluck('pageViews')->sum();
    $newThisMonth = Analytics::totalVisits(Period::days($myStartDate->diffInDays()))->pluck('newUsers')->sum();

    $topCountries = Analytics::topCountries($period)->take(13);

    $chart = (new LarapexChart)->donutChart()
        ->setTitle('Top ' .  $topCountries->pluck('country')->count() . ' Visiting Countries.')
        ->setSubtitle('Since Last ' . $startDate->diffForHumans())
        ->addData($topCountries->pluck('sessions')->toArray())
        ->setLabels($topCountries->pluck('country')->toArray());

    return view('test6', compact('chart', 'live_users', 'pages', 'topCountries', 'visitors', 'totalThisMonth', 'newThisMonth'));
})->middleware(['auth'])->name('test6');

Route::view('terms', 'terms');
Route::view('help', 'help');
Route::view('topics', 'topics');
Route::view('donate', 'donate');
Route::view('privacy', 'privacy');
Route::view('dmca', 'dmca');
Route::view('about', 'about');
Route::view('documentation', 'documentation');
Route::view('contact', 'contact');
Route::view('our-process', 'our-process');
Route::view('institutes', 'institutes'); // front end institute


Route::get('/', function () {
    $latest = Newsroom::latest()->take(4)->get();
    $upcomingInstitute = Institute::where('startDate', '>', now())
        ->orderBy('startDate', 'asc')
        ->first();
    return view('home', compact('latest', 'upcomingInstitute'));
})->name('home');

Route::get('news', function () {
    $latest = Newsroom::latest()->take(2)->get();
    $news = Newsroom::whereNotIn('id', $latest->pluck('id'))->latest()->paginate(4);
    $firstLatest = $latest->first();
    $secondLatest = $latest->skip(1)->first();
    return view('news', compact('news', 'latest', 'firstLatest', 'secondLatest'));
})->name('news');

Route::get('myEnrolments', function () {
    return view('myEnrolments');
})->name('myEnrolments')->middleware('auth');

Route::get('test3', function () {
    $roles = Role::paginate();
    $permissions = Permission::all();
    return view('test3', compact('roles', 'permissions'));
});

// display a particular institute using slug as parameter for the flrontend
Route::get('/institutes/{slug}', [DisplayInstituteController::class, 'show'])->name('institute.show');

Route::get('institutes', function () {
    $institutes = Institute::get();
    $nextInstitute = Institute::where('startDate', '>', now())
        ->orderBy('startDate', 'asc')
        ->first();
    return view('institutes.index', compact('institutes', 'nextInstitute'));
})->name('institutes');

Route::get('/news/{slug}', [NewsroomController::class, 'show'])->name('news.show');
Route::post('contact', ContactController::class)->name('contact-form');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



// Participants and Everyone else  Routes
Route::middleware(['auth', config('jetstream.auth_session'), 'setNewPassword'])->group(function () {

    Route::get('dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    Route::get('invoices', function () {
        // $transactions = Transaction::where('participant_id', Auth::user()->id)
        //     ->with('participant', 'invoice','institute')
        //     ->get();
        $myInvoices = Invoice::where('participant_id', Auth::user()->id)
            ->with('participant', 'transaction')->get();
        // dd($myInvoices);
        return view('user.invoices', compact('myInvoices'));
    })->name('invoices');

    Route::get('/profile', function () {
        return view('profile.show');
    });
});

Route::get('set_password', function () {
    return view('auth.set_password');
})->name('set_password')->middleware('auth', config('jetstream.auth_session'));


// Admin Routes
Route::middleware(['auth', 'banned', 'mustBeAdmin', config('jetstream.auth_session')])->prefix('admin')->group(function () {

    Route::get('participants/', function () {
        $participants = User::participant()->get();
        return view('admin/participants/index', compact('participants'));
    })->name('admin.participants');

    Route::resource('institutes', InstituteController::class);
    Route::resource('transactions', TransactionController::class);
    Route::resource('announcements', AnnouncementController::class);
    Route::resource('newsroom', NewsroomController::class);

    Route::get('calender', function () {
        return view('admin.calender');
    })->name('calender');

    Route::get('settings', function () {
        return view('admin.settings');
    })->name('admin.settings');

    Route::get('analytics', function () {
        return view('admin.analytics');
    })->name('admin.analytics');

    Route::get('media', function () {
        return view('admin.media');
    })->name('admin.media');

    Route::get('dashboard', function () {
        $latest = User::take(7)->orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('latest'));
    })->name('admin.dashboard');

    Route::get('/roles/manage-roles', function () {
        $users = User::all();
        return view('admin/roles/manage-roles', compact('users'));
    })->name('roles');

    Route::get('logs', function () {
        return view('admin.logs');
    })->name('logs');

    Route::get('staff', function () {
        $users = User::staff()->paginate(8);
        return view('staff.index', compact('users'));
    })->name('staff');
});

Route::get('/faculty', function () {
    return view('faculty.index');
})->name('faculty')->middleware(['auth', 'banned', config('jetstream.auth_session')]);




Route::get('invoice', function () {
    return view('invoice');
});
Route::get('test5', function () {
    return view('test5');
});



Route::get('flags', function () {
    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

    $random_country = $countries[array_rand($countries)];
    echo $random_country;
    // $country = 'ghana';
    // $response = Http::get("https://restcountries.com/v3.1/name/{$country}");
    // $data = $response->json();
    // dd($data);
    // dd($data[0]['flag']);
    // $flagUrl = $data['flags']['png'];
    // return $flagUrl;
})->name('flags');




Route::get('nations', function () {


    // Get the current date
    $today = date('Y-m-d');

    // Find the first instance of an institute where startDate is greater than today's date
    $upcomingInstitute = Institute::where('startDate', '>', $today)
        ->orderBy('startDate', 'asc')
        ->first();

    // If no upcoming institute was found, return null
    if (!$upcomingInstitute) {
        return null;
    }

    return $upcomingInstitute->name;

    // return Institute::count();
})->name('nations');


Route::get('test', function () {

    return view('test');
});
Route::get('test2', function () {
    $record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        ->where('created_at', '>', Carbon::today()->subDay(66))
        ->groupBy('day_name', 'day')
        ->orderBy('day')
        ->get();

    $data = [];

    foreach ($record as $row) {
        $data['label'][] = $row->day_name;
        $data['data'][] = (int) $row->count;
    }

    $data['chart_data'] = json_encode($data);
    return view('test2', $data);
})->middleware('auth');
