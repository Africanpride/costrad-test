<?php

namespace App\Models;

use Spatie\Image\Manipulations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug','overview', 'body','description', 'featured_image' ];

    public function news()
    {
        return $this->hasMany(Newsroom::class);
    }

    public function registerMediaCollections(): void    {

        $this->addMediaCollection('category_image')
            // ->withResponsiveImages()
            ->singleFile();

        $this->addMediaConversion('banner')
            ->width(1024)
            ->height(300)
            ->sharpen(10);

        $this->addMediaConversion('thumb')
            ->width(200)
            ->height(200)
            ->sharpen(10);

        $this->addMediaConversion('square')
            ->width(212)
            ->height(212)
            ->sharpen(10);

        $this->addMediaConversion('old-picture')
            ->sepia()
            ->border(10, 'black', Manipulations::BORDER_OVERLAY);
  }
}
