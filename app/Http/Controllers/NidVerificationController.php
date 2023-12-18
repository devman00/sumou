<?php

namespace App\Http\Controllers;

use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;

class NidVerificationController extends Controller
{
    public function show(Request $request)
    {
        return view('front.nidverify.show');
    }

    // Verification .. 
    public function send(Request $request) 
    {
        // dd($request->n_id);
        
        $curl = curl_init();
        $data = array(
            "nationalId" => $request->n_id, 
            "service" => "OpenAccountWithoutBio",
        );
        $data_string = json_encode($data);

        $local = "ar";
        $requestId = "d4bc1065-1aeb-45d6-a6a3-8f1b30e6b6a4";

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nafath.api.elm.sa/stg/api/v1/mfa/request?local='.$local.'&requestId='.$requestId,  
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data_string,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'APP-ID: dc430d84',
                'APP-KEY: 148a170f077514fc3dd274650dfab30f',
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;   // transId   /  random
    }

    // Confirmation .. 
    public function confirm(Request $request) {
        
        // Nafath Table

        // nationalId
        // random
        // transId      Transaction ID created upon creating the request

    }

     // Callback Test Mode.. 
     public function callback1(Request $request) {
        //COMPLETED     REJECTED     //       error
        return 'test';
     }
 
     // Callback Live Mode.. 
     public function callback(Request $request) {
        return 'test';
     }
 

}
