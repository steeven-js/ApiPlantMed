<?php

namespace App\Models;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Symptome extends Model
{
    use HasFactory;

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
