<?php

namespace App\Models;

use App\Models\Plant;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Symptome extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_visible',
        'source',
    ];

    // Define the many-to-many relationship with plants
    public function plants(): BelongsToMany
    {
        return $this->belongsToMany(Plant::class, 'symptome_plants', 'symptome_id', 'plant_id')->withTimestamps();
    }

    // Define the media relationship
    public function registerMediaCollections(): void
    {
        // You can customize the collection name and the disk as needed
        $this->addMediaCollection('symptome_media')->singleFile();
    }
}
