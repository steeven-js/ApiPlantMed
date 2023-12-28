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
        'is_visible',
    ];

    public function plants(): BelongsToMany
    {
        return $this->belongsToMany(Plant::class, 'symptome_plants', 'symptome_id', 'plant_id')->withTimestamps();
    }
}
