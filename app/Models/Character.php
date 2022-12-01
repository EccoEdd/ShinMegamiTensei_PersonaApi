<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;
use App\Models\Title;

class Character extends Model
{
    use HasFactory;
    protected $hidden =[
        'persona_id',
        'title_id'
    ];
    public function Persona(){
        return $this->hasOne(Persona::class);
    }
    public function Title(){
        return $this->belongsTo(Title::class);
    }
}
