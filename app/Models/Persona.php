<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Character;
use App\Models\Card;

class Persona extends Model
{
    use HasFactory;
    protected $hidden = [
        'arcana_id'
    ];
    public function Card(){
        return $this->hasOne(Card::class, 'id', 'arcana_id');
    }
    public function Character(){
        return $this->belongsTo(Character::class);
    }
}
