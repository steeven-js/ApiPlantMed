<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SymptomePlant extends Model
{
    use HasFactory;

    protected $fillable = [
        'symptome_id',
        'plant_id',
    ];
}
