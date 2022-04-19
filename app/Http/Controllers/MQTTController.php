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
    /** @var \PhpMqtt\Client\Contracts\MqttClient $mqtt */
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

        $this->mqtt = MQTT::connection();
        $this->mqtt->subscribe('some/topic', function (string $topic, string $message) {
            echo sprintf('Received QoS level 1 message on topic [%s]: %s', $topic, $message);
        }, 1);
        $this->mqtt->loop(true);
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
                $topics[$capteur->getId()] = "v3/smart-cantine-app@ttn/devices/".$capteur->getTtn_device_id()."/up";
            }catch(ErrorException  $e){

            }
        }

    }
}
