<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capteur extends Model
{
    use HasFactory;
    public function mesures(){
        return $this->hasMany(Mesure::class);
    }

    public function getCantine(){
        return $this->attributes['cantine_id'];
    }

    public function setCantine($cantine){
        $this->attributes['cantine_id'] = $cantine;
    }

    public function getType(){
        return $this->attributes['type'];
    }

    public function setType($type){
        $this->attributes['type'] = $type;
    }


}
