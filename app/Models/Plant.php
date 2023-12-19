<?php

namespace App\Models;

use App\Models\PlantPropriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function proprietes()
    {
        return $this->hasMany(PlantPropriete::class);
    }
}
