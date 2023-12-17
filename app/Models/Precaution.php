<?php

namespace App\Models;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Precaution extends Model
{
    use HasFactory;

    protected $fillable = [
        'plant_id',
        'name',
        'precaution',
    ];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
