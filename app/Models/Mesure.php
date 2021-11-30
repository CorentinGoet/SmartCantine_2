<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesure extends Model
{
    use HasFactory;
    public function capteur(){
        return $this->belongsTo(Capteur::class);
    }

    public function getId(){
        return $this->attributes['id'];
    }

    public function getCapteur(){
        return $this->attributes['capteur_id'];
    }

    public function setCapteur($capteur){
        $this->attributes['capteur_id'] = $capteur;
    }

    public function getNoiseLevel(){
        return $this->attributes['noise_level'];
    }

    public function setNoiseLevel($val){
        $this->attributes['noise_level'] = $val;
    }

    public function getDateMesure(){
        return $this->attributes['date_mesure'];
    }

    public function setDateMesure($date){
        $this->attributes['date_mesure'] = $date;
    }



}
