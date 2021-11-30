<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cantine extends Model
{
    use HasFactory;

    public function capteurs(){
        return $this->hasMany(Capteur::class);
    }

    public function getLocation(){
        return $this->attributes['location'];
    }

    public function setLocation($location){
        $this->attributes['location'] = $location;
    }
}
