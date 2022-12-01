<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Character;

class Title extends Model
{
    use HasFactory;
    public function Character(){
        return $this->belongsToMany(Character::class);
    }
}
