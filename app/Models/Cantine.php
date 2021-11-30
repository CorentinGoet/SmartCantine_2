<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cantine extends Model
{
    use HasFactory;

    protected $fillable = ['location'];

    public function capteurs(){
        return $this->hasMany(Capteur::class);
    }

    public function getId(){
        return $this->attributes['id'];
    }

    public function getLocation(){
        return $this->attributes['location'];
    }

    public function setLocation($location){
        $this->attributes['location'] = $location;
    }
}
