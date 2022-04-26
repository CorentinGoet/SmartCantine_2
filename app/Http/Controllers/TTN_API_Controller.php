<?php

namespace App\Http\Controllers;

use App\Models\Mesure;
use ErrorException;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class TTN_API_Controller extends Controller
{
    /**
     * Cette fonction fait une requête à l'API de The Things Network pour récupérer les données
     * envoyées par nos capteurs.
     */
    public function request(){
        // Parameters:
        $req_url = "https://eu1.cloud.thethings.network/api/v3/as/applications/smart-cantine-app/packages/storage/uplink_message";
        $api_key = "NNSXS.VRIDNAJR4HU6CTMXV5RK7GZ36RIQHPILZPFUBNA.KG57DQVTXBZXCPYJGXESQJW5X72C2EON4N25ZAT3P2ULJXXLWQDQ";
        $header = ["Accept: Accept: text/event-stream", "Authorization: Bearer ".$api_key];

        $curl_request = curl_init();
        curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_request, CURLOPT_URL, $req_url);
        curl_setopt($curl_request, CURLOPT_HTTPHEADER, $header);

        $res = curl_exec($curl_request);

        return $res;
    }

    /**
     * Takes the JSON array given by The Things Network and returns an array with the necessary elements
     * for the database entry.
     *
     * @param $param array json array.
     */
    private function parse_json_measure(array $param){
        // General info about this transmission
        $payload = base64_decode($param["result"]["uplink_message"]["frm_payload"]);
        $transmission_date_string = substr($param['result']['received_at'], 0, 18);
        $transmission_date = strtotime($transmission_date_string);
        $device_id = $param['result']['end_device_ids']['device_id'];

        // Finding noise level and date of each measure
        $decibel_values = [];
        $measure_times = [];
        for($i=0; $i<5; $i++){
            $decibel_values[$i] = ord($payload[$i]);
            $measure_times[$i] = getDate($transmission_date - $i*10);
        }

        return ['ttn_device_id' => $device_id, 'dates' => $measure_times, 'noise_levels'=>$decibel_values];
    }

    public function index(){

        $ttn_request = $this->request();
        $string_array = explode("\n", $ttn_request);
        $val_array = [];
        $i = 0;


        foreach ($string_array as $str_json){
            try{
                $json_array = json_decode($str_json, null, 512, JSON_OBJECT_AS_ARRAY);
                if ($json_array != null){
                    $measure_array = $this->parse_json_measure($json_array);

                    foreach ($measure_array as $measure){
                        MesuresController::save($measure);
                    }
                }

            }catch(TypeError $e){

            }


        }

        foreach($val_array as $str_payload) {

            //$json_payload = json_decode(base64_decode($str_payload), null, 512, JSON_OBJECT_AS_ARRAY);
            //$mesure_data['capteur_id'] = $json_payload['id'];
            //$mesure_data['noise_level'] = $json_payload['mesure'];
            $str_dec = str_split(base64_decode($str_payload));
            $mesure_data['noise_level'] = ord($str_dec[0]);


            MesuresController::save($mesure_data);
        }
        return redirect('/mesures/1');
    }
}
