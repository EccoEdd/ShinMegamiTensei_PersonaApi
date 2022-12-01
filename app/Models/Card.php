<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;

class Card extends Model
{
    use HasFactory;
    public function Persona(){
        return $this->belongsToMany(Persona::class);
    }
}
