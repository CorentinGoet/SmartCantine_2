<?php

namespace App\Http\Controllers;

use App\Models\Capteur;
use Illuminate\Http\Request;
use PhpMqtt\Client\Facades\MQTT;
/**
 * Class responsible for the interaction with the mqtt server from The Things Network
 */
class MQTTController extends Controller
{
    /** @var Array of \PhpMqtt\Client\Contracts\MqttClient */
    private $mqtt;


    /**
     * Method called to start the connection to the MQTT server
     *
     * This method subscribes to the topic: v3/{application id}@{tenant id}/devices/{device id}/up
     *
     * @throws \PhpMqtt\Client\Exceptions\DataTransferException
     * @throws \PhpMqtt\Client\Exceptions\MqttClientException
     * @throws \PhpMqtt\Client\Exceptions\ProtocolViolationException
     * @throws \PhpMqtt\Client\Exceptions\RepositoryException
     */
    public function start(){

        $topics = $this->getTopics();
        $connected = "";
        foreach($topics as $ttn_id => $topic){
            $this->mqtt[$ttn_id] = MQTT::connection();
            $this->mqtt[$ttn_id] -> subscribe($topic, function (string $topic, string $message) {
                echo sprintf('Received QoS level 0 message on topic [%s]: %s', $topic, $message);
            }, 0);
            $this->mqtt[$ttn_id]->loop(true);
            $connected = $connected.$ttn_id.", ";
        }
        return back()->with("connected to: ".$connected);
    }

    /**
     * This method finds the topics to subscribe to.
     *
     * The mqtt client has to subscribe to uplinks for each end device.
     *
     * The different topics have the name: v3/{application id}@{tenant id}/devices/{device id}/up
     *
     */
    private function getTopics(){
        $capteurs = Capteur::all();
        $topics = [];
        foreach ($capteurs as $capteur){
            try{
                $topics[$capteur->getTtn_device_id()] = "v3/smart-cantine-app@ttn/devices/".$capteur->getTtn_device_id()."/up";
            }catch(ErrorException  $e){

            }
        }
        return $topics;

    }

    /**
     * Disconnects all mqtt connections
     */
    public function stop(){
        foreach($this->mqtt as $ttn_id => $mqtt_connection){
            $mqtt_connection->interrupt();
        }
    }
}
