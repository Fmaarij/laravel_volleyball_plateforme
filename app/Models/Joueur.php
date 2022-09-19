<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

    public function photo(){
        return $this->belongsTo(Photo::class);
    }


    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function equipe(){
        return $this->hasMany(Equipe::class);
    }
    public function continent(){
        return $this->hasMany(Continent::class);
    }
    public function joueur(){
        return $this->belongsTo(Joueur::class);
    }
}
