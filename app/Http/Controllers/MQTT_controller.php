<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mosquitto\Client;
use function PHPUnit\Framework\isNull;
use function Sodium\add;

/**
 * Controlleur du client MQTT
 * voir : https://www.wingsquare.com/blog/developing-php-client-for-mqtt-using-mosquitto-php-library/
 */
class MQTT_controller extends Controller
{
    private $client;
    private $status;
    private $messages;

    /**
     * Displays the status of the MQTT Connection
     */
    public function index(){
        if (isNull($this->client)){
            $this->init();
        }
        return view('SmartCantine.mqtt')->with($this->status);
    }

    /**
     * Initialize the MQTT connection to the things network
     */
    public function init(){
        $client = new Client();
        $client->onConnect('connectCallback');
        $client->onDisconnect('disconnectCallback');

        $status = "disconnected";
        $messages = [];
    }

    /**
     * Connects the client to the given MQTT server.
     * @param string $url Adresse du serveur MQTT
     * @param int $port Port à connecter
     * @param int $ttl
     */
    public function connect(string $url, int $port=1883, int $ttl=60){
        $connect_str = $url + str($port) + str($ttl);
        $this->client->connect($connect_str);
    }

    public function disconnect(){
        $this->client->disconnect();
    }

    /**
     * Méthode appelée en cas de connection pour récupérer le message de retour.
     * @param int $r Code de retour du serveur
     */
    private function connectCallback($r){
        switch ($r){
            case 0:
                // Success
                $this->status = 'connected';
                $this->messages['connection status'] = "Connection Successful !";
                break;
            case 1:
                // Connection refused - bad protocol
                $this->status = 'disconnected';
                $this->messages['connection status'] = "Connection refused : bad protocol";
                break;
            case 2:
                // Connection refused - identifier rejected
                $this->status = 'disconnected';
                $this->messages['connection status'] = "Connection refused : bad protocol";
                break;
            case 3:
                // Connection refused - broker unavailable
                break;
        }
    }

    /**
     * Méthode appelée en cas de déconnection.
     */
    private function disconnectCallback(){

    }
}
