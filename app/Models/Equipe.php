<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    public function continent(){
        return $this->belongsTo(Continent::class);
    }
    public function joueur(){
        return $this->hasMbelgongsany(Joueur::class);
    }

    // public function equipe(){
    //     return $this->hasMany(Equipe::class);
    // }
}
