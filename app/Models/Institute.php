<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Feature;
use App\Models\Transaction;
use App\Models\ExchangeRate;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class Institute extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


    public $fillable = [
        'name',
        'acronym',
        'overview',
        'introduction',
        'about',
        'icon',
        'logo',
        'banner',
        'startDate',
        'endDate',
        'seo',
        'active',
        'slug',
        'price'
    ];

    protected $casts = [
        'active' => 'boolean',
        'price' => 'float',
        'services' => 'array'
    ];

    protected $services = [
        'Certificate of Completion',
        'Protocol & Hospitality Assistance',
        'Access to COSTrAD Resources',
        'Access to Faculty Members',
        'Mentorship on Systems Development',
    ];

    protected $appends = [
        'frontend_url',
        'institute_logo',
        'institute_banner_url',
        'services',
        'progress',
        'duration',
        'featured_image',
        'local_currency',

    ];

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'institute_participant', 'institute_id', 'participant_id');
    }

    public static function getExchangeRate()
    {
        $exchange_rate = ExchangeRate::latest()->first(); // get the latest exchange rate from the database

        if (!$exchange_rate || Carbon::parse($exchange_rate->updated_at)->diffInHours(Carbon::now()) >= 24) {
            // fetch exchange rate from API and update database
            $response = Http::get('https://openexchangerates.org/api/latest.json', [
                'app_id' => config('app.openExchange'),
                'symbols' => 'GHS'
            ]);

            $responseData = $response->json();
            $exchange_rate_value = $responseData['rates']['GHS'];

            if ($exchange_rate) {
                // update existing exchange rate in the database
                $exchange_rate->update(['rate' => $exchange_rate_value]);
            } else {
                // create new exchange rate in the database
                ExchangeRate::create(['rate' => $exchange_rate_value]);
            }

            $exchange_rate = $exchange_rate_value; // update $exchange_rate variable with the latest value
        } else {
            $exchange_rate = $exchange_rate->rate;
        }

        return $exchange_rate;
    }

    public function getLocalCurrencyAttribute()
    {

        $ghs_amount = $this->attributes['price'] * (ExchangeRate::getExchangeRate() + 1);

        return round($ghs_amount);
    }

    public function getServicesAttribute()
    {
        return $this->services;
    }


    function getDurationAttribute(): string
    {
        $startDate = Carbon::parse($this->startDate);
        $endDate = Carbon::parse($this->endDate);
        $startMonth = $startDate->format('M');
        $startDay = $startDate->format('d');
        $endMonth = $endDate->format('M');
        $endDay = $endDate->format('d');
        return "{$startMonth} {$startDay} – {$endMonth} {$endDay}";
    }

    function getProgressAttribute(): int
    {
        $start = Carbon::parse($this->startDate);
        $end = Carbon::parse($this->endDate);
        $currentDate = Carbon::now();

        // Calculate the total number of days between the start and end dates
        $totalDays = $start->diffInDays($end);

        // Calculate the number of elapsed days from the start date to the current date
        $elapsedDays = $start->diffInDays($currentDate);

        // Calculate the progress as a percentage
        $progress = round(($elapsedDays / $totalDays) * 100);

        // Check if the current date is greater than the end date
        if ($currentDate > $end) {
            return 100;
        }

        // Check if the current date is within the start and end dates
        if ($currentDate > $start) {
            return $progress;
        }

        return 0;
    }



    public function features(): HasMany
    {
        return $this->hasMany(Feature::class);
    }

    public function getInstituteLogoAttribute(): string
    {
        return asset("storage/{$this->logo}");
    }

    public function getInstituteBannerUrlAttribute(): string
    {
        return asset("storage/{$this->banner}");
    }

    public function getFrontendUrlAttribute()
    {
        return url('/') . "/" . $this->slug;
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFeaturedImageAttribute(): string
    {

        return ($this->getFirstMediaUrl('featured_image') != null) ? $this->getFirstMediaUrl('featured_image')  :  $this->getFirstMediaUrl('banner');
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaConversion('featured_image')
            ->width(1024)
            ->height(500)
            ->sharpen(10);

        $this->addMediaConversion('banner')
            ->width(1024)
            ->height(500)
            ->sharpen(10);

        $this->addMediaConversion('logo')
            ->width(300)
            ->height(300)
            ->sharpen(10);
    }
}
