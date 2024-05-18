<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Banner extends Model implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    public $translatable = [
        'title',
        'description',
    ];

    protected $fillable = [
        'url',
        'title',
        'description',
    ];

    // Define the media relationship
    public function registerMediaCollections(): void
    {
        // You can customize the collection name and the disk as needed
        $this->addMediaCollection('banner-images')->singleFile();
    }

    // http to https
    public function getFirstMediaUrlAttribute()
    {
        return $this->getFirstMediaUrl('banner-images');
    }
}
