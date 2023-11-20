<?php

namespace App\Services\SMS;

class OurSMSServiceProvider implements SMSInterface {

    public function __construct(
        protected string $receiverNumber,
        protected string $body
    ) {}

    public function handler() : array
    {
        $curl = curl_init();

        $data_string = "username=imohzz&token=nEe9HI8vnyt_4MqTmaAT&src=Sumou.sa&dests={$this->receiverNumber}&body={$this->body}&priority=0&delay=0&validity=0&maxParts=0&dlr=0&prevDups=0";

        try {
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.oursms.com/api-a/msgs',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data_string, //json_encode($this->payload()),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
        } catch (\Exception $e) {
                $response = ['status' => false, 'message' => $e->getMessage()];
        }

        return (array) $response;
    }

    private function payload() {
        return [
            "src" => "oursms",
            "dests" => [$this->receiverNumber],
            "body" => $this->body,
            "priority" => 0,
            "delay" => 0,
            "validity" => 0,
            "maxParts" => 0,
            "dlr" => 0,
            "prevDups" => 0,
            "msgClass" => "promotional"
        ];
    }
}


