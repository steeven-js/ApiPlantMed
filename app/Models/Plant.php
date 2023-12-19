<?php

namespace App\Models;

use App\Models\Symptome;
use App\Models\PlantPropriete;
use App\Models\PlantPrecaution;
use App\Models\PlantUtilisation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'nscient',
        'famille',
        'genre',
        'description',
        'habitat',
    ];

    public function proprietes()
    {
        return $this->hasMany(PlantPropriete::class);
    }

    public function precautions()
    {
        return $this->hasMany(PlantPrecaution::class);
    }

    public function utilisations()
    {
        return $this->hasMany(PlantUtilisation::class);
    }

    public function symptomes(): BelongsToMany
    {
        return $this->belongsToMany(Symptome::class, 'symptome_plants', 'plant_id', 'symptome_id')->withTimestamps();
    }
}
