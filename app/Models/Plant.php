<?php

namespace App\Models;

use App\Models\PlantPropriete;
use App\Models\PlantPrecaution;
use App\Models\PlantUtilisation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function plantProprietes(): HasMany
    {
        return $this->hasMany(PlantPropriete::class, 'plant_id');
    }

    public function plantUtilisations(): HasMany
    {
        return $this->hasMany(PlantUtilisation::class, 'plant_id');
    }

    public function plantPrecautions(): HasMany
    {
        return $this->hasMany(PlantPrecaution::class, 'plant_id');
    }
}
