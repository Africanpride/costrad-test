<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Announcement
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property string|null $image
 * @property string|null $icon
 * @property string|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $author
 * @method static \Database\Factories\AnnouncementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereUserId($value)
 */
	class Announcement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $overview
 * @property string|null $body
 * @property string|null $description
 * @property string|null $featured_image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Newsroom> $news
 * @property-read int|null $news_count
 * @method static \Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereFeaturedImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereOverview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Donations
 *
 * @property string $id
 * @property string|null $amount
 * @property string|null $fees
 * @property string|null $donor_name
 * @property string|null $donor_email
 * @property string|null $ip_address
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Donations newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donations newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Donations query()
 * @method static \Illuminate\Database\Eloquent\Builder|Donations whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donations whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donations whereDonorEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donations whereDonorName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donations whereFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donations whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donations whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Donations whereUserId($value)
 */
	class Donations extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExchangeRate
 *
 * @property int $id
 * @property string $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExchangeRate whereUpdatedAt($value)
 */
	class ExchangeRate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Faculty
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Faculty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faculty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faculty query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faculty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faculty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faculty whereUpdatedAt($value)
 */
	class Faculty extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Feature
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int $institute_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Institute $institute
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereUpdatedAt($value)
 */
	class Feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Institute
 *
 * @property int $id
 * @property string $name
 * @property string $acronym
 * @property string|null $overview
 * @property string|null $about
 * @property string|null $introduction
 * @property string|null $icon
 * @property string|null $logo
 * @property string|null $banner
 * @property string $startDate
 * @property string $endDate
 * @property string|null $seo
 * @property bool|null $active
 * @property string|null $slug
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $participant_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Feature> $features
 * @property-read int|null $features_count
 * @property-read string $duration
 * @property-read string $featured_image
 * @property-read mixed $frontend_url
 * @property-read string $institute_banner_url
 * @property-read string $institute_logo
 * @property-read mixed $local_currency
 * @property-read int $progress
 * @property-read mixed $services
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $participants
 * @property-read int|null $participants_count
 * @method static \Illuminate\Database\Eloquent\Builder|Institute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereAcronym($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereIntroduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereOverview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereParticipantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereSeo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereUpdatedAt($value)
 */
	class Institute extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Invoice
 *
 * @property string $id
 * @property string $participant_id
 * @property string|null $transaction_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $participant
 * @property-read \App\Models\Transaction|null $transaction
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereParticipantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Newsroom
 *
 * @property string $id
 * @property string $title
 * @property string $slug
 * @property string|null $overview
 * @property string $body
 * @property string|null $featured_image
 * @property int $like
 * @property bool $active
 * @property string $user_id
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $author
 * @property-read \App\Models\Category|null $category
 * @property-read mixed $frontend_url
 * @property-read string $newsroom_image
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\NewsroomFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom query()
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereFeaturedImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereLike($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereOverview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsroom whereUserId($value)
 */
	class Newsroom extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $description
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Profile
 *
 * @property string $id
 * @property string|null $title
 * @property string|null $gender
 * @property string|null $dateOfBirth
 * @property string|null $marital_status
 * @property string|null $telephone
 * @property string|null $address
 * @property string|null $state
 * @property string|null $city
 * @property string|null $country
 * @property string|null $zipcode
 * @property string|null $emergencyContactName
 * @property string|null $emergencyContactTelephone
 * @property string|null $nationality
 * @property string|null $bio
 * @property string $user_id
 * @property bool|null $disabled
 * @property string|null $avatar
 * @property int|null $lc_country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $profession
 * @property-read mixed $country_flag
 * @property-read mixed $nice_date
 * @property-read string $participant_avatar
 * @property-read mixed $profile_country
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEmergencyContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEmergencyContactTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLcCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMaritalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereProfession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereZipcode($value)
 */
	class Profile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $description
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string|null $name
 * @property string $key
 * @property array|null $value
 * @property bool $locked
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Transaction
 *
 * @property string $id
 * @property string $amount
 * @property string $authorization_code
 * @property string $description
 * @property string $fees
 * @property string $reference
 * @property string $transaction_date
 * @property string $currency
 * @property string $participant_id
 * @property int $institute_id
 * @property string $ipAddress
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Institute $institute
 * @property-read \App\Models\User $participant
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereAuthorizationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereParticipantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereTransactionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUpdatedAt($value)
 */
	class Transaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property string $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $avatar
 * @property string|null $social_avatar
 * @property string|null $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property bool $staff
 * @property bool $facultyMember
 * @property bool $participant
 * @property bool $must_create_password
 * @property bool $active
 * @property int $ban
 * @property string|null $remember_token
 * @property string|null $timezone
 * @property string|null $google_id
 * @property string|null $apple_id
 * @property string|null $facebook_id
 * @property string|null $twitter_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $last_seen
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Rappasoft\LaravelAuthenticationLog\Models\AuthenticationLog> $authentications
 * @property-read int|null $authentications_count
 * @property-read mixed $avatar_url
 * @property-read string $full_name
 * @property-read mixed $name
 * @property-read string $profile_photo_url
 * @property-read mixed $user_role
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Institute> $institutes
 * @property-read int|null $institutes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Invoice> $invoices
 * @property-read int|null $invoices_count
 * @property-read \Rappasoft\LaravelAuthenticationLog\Models\AuthenticationLog|null $latestAuthentication
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Newsroom> $news
 * @property-read int|null $news_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Models\Profile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Transaction> $transactions
 * @property-read int|null $transactions_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User faculty()
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User participant()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User staff()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAppleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacultyMember($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMustCreatePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereParticipant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwitterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

