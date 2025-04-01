<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'small_description',
        'description',
        'image',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function videos(){
        return $this->hasMany(PlayerVideo::class);
    }
}
