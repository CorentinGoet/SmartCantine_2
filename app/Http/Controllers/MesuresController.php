<?php

namespace App\Http\Controllers;

use App\Mail\TrashMail;
use App\Models\Cantine;
use App\Models\Capteur;
use App\Models\Mesure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MesuresController extends Controller
{
    public function index($cantine){
        $cantine = Cantine::findOrFail($cantine);
        Capteur::with('mesures')->get();
        $graph_data = $this->data();
        //dd($graph_data);
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

    /**
     * Creates a new entry in the database for mesure in the database.
     * @param $data
     */
    public static function save($data){
        try{
            $noise_level = $data["noise_level"];
            $date_mesure = $data["date_mesure"];
            $ttn_device_id = $data["ttn_device_id"];

        }catch (Exception $ex){
            return "Invalid data format";
        }

        return 0;
    }


}
