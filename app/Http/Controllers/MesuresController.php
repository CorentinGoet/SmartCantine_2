<?php

namespace App\Http\Controllers;

use App\Models\Cantine;
use Illuminate\Http\Request;

class MesuresController extends Controller
{
    public function index($cantine){
        $cantine = Cantine::findOrFail($cantine);
        $array = $this->graph_points($cantine);
        return view('SmartCantine/mesures', [
            'cantine'=>$cantine,
            'array_chart'=>$array,
        ]);
    }

    private function graph_points($cantine){
        $array = [];
        foreach ($cantine->capteurs as $capteur){
            foreach ($capteur->mesures as $mesure){
                $x = $mesure->created_at;
                $y = $mesure->noise_level;
                array_push($array, array('x'=>$x, 'y'=>$y));
            }
        }
        return $array;
    }
}
