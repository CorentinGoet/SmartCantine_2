<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function index(){

        $ttn_request = $this->request();
        $string_array = explode("\n", $ttn_request);
        $val_array = [];
        $i = 0;
        foreach ($string_array as $str_json){
            $tmp = json_decode($str_json, null, 512, JSON_OBJECT_AS_ARRAY);

            if($tmp != null){

                $val_array[$i] = $tmp["result"]["uplink_message"]["frm_payload"];
            }

            $i++;
        }
        dd($val_array);
    }
}
