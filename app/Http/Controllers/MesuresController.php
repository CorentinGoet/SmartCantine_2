<?php

namespace App\Http\Controllers;

use App\Models\Cantine;
use App\Models\Capteur;
use Illuminate\Http\Request;

class MesuresController extends Controller
{
    public function index($cantine){
        $cantine = Cantine::findOrFail($cantine);
        Capteur::with('mesures')->get();
        $graph_data = $this->data();
        //dd($graph_data['labels']);

        return view('SmartCantine/mesures', [
            'cantine'=>$cantine,
            'graph_data' => $graph_data,
        ]);
    }

    protected function data(){
        $capteurs = Capteur::with('mesures')->get();
        $labels = [];
        $values = [];
        $i = 0;
        foreach ($capteurs as $capteur){
            foreach ($capteur->mesures as $mesure) {
                $labels[$i] = $mesure->date_mesure;
                $values[$i] = $mesure->noise_level;
                $i++;
            }
        }
        return ["labels" => $labels,
                "values" => $values];
    }


}
