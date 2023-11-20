<?php


namespace App\Services\SMS;

use App\Services\SMS\OurSMSServiceProvider;

class SMSProvider {

    public function __construct(
        protected string $receiverNumber, //dests
        protected string $body
    ) {}

    public function send() {
        return match (env('SMS_SERVICE_PROVIDER', 'OURSMS')) {
            'OURSMS' => (new OurSMSServiceProvider($this->receiverNumber, $this->body))->handler(),
            default => null,
        };
    }

}