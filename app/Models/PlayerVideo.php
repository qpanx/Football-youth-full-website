<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'video',
    ];

    public function player(){
        return $this->belongsTo(Player::class);
    }

}
