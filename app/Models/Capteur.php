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
}
