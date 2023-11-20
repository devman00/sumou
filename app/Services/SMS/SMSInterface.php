<?php

namespace App\Services\SMS;


interface SMSInterface {
    public function handler() : array;
}