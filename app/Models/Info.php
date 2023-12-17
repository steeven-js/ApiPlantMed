<?php

namespace App\Models;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'plant_id',
        'name',
        'nscient',
        'famille',
        'genre',
        'description',
        'habitat',
    ];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
