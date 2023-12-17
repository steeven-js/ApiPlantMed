<?php

namespace App\Models;

use App\Models\Info;
use App\Models\Category;
use App\Models\Propriete;
use App\Models\Precaution;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function infos()
    {
        return $this->hasOne(Info::class);
    }

    public function proprietes()
    {
        return $this->hasOne(Propriete::class);
    }

    public function precautions()
    {
        return $this->hasOne(Precaution::class);
    }
}
