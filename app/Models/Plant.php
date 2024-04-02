<?php

namespace App\Models;

use App\Models\Symptome;
use App\Models\PlantPropriete;
use App\Models\PlantPrecaution;
use App\Models\PlantUtilisation;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Plant extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'nscient',
        'famille',
        'genre',
        'description',
        'habitat',
        'propriete',
        'precaution',
        'usageInterne',
        'usageExterne',
        'isActive',
        'mostPopular',
        'bestSeller',
        'newArrivals',
        'recentlyViewed',
    ];

    public function symptomes(): BelongsToMany
    {
        return $this->belongsToMany(Symptome::class, 'symptome_plants', 'plant_id', 'symptome_id')->withTimestamps();
    }

    // Define the media relationship
    public function registerMediaCollections(): void
    {
        // You can customize the collection name and the disk as needed
        $this->addMediaCollection('plant-images')->singleFile();
    }

    // http to https
    public function getFirstMediaUrlAttribute()
    {
        return $this->getFirstMediaUrl('plant-images');
    }
}
