<?php

namespace App\Http\Controllers;

use App\Models\Nafath;
use App\Models\User;
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
        $curl = curl_init();
        $data = array(
            "nationalId" => $request->n_id,
            "service" => "OpenAccountWithoutBio",
        );
        $data_string = json_encode($data);

        $local = "ar";
        $requestId = "d4bc1065-1aeb-45d6-a6a3-8f1b30e6b6a4";

        try {
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
        } catch (\Exception $e) {
            $response = ['status' => false, 'message' => $e->getMessage()];
        }

        return $response;

    }

    // Confirmation ..
    public function confirm(Request $request) {

        $data = $request->all();
        Nafath::create($data);

        $usr = User::find(auth()->user()->id);
        $usr->national_id = $request->input('nationalId');
        $usr->update();

        return "success";
    }

    // status..
    public function status(Request $request) {

        $curl = curl_init();
        $data = array(
            "nationalId" => $request->nationalId,
            "transId" => $request->transId,
            "random" => $request->random,
        );
        $data_string = json_encode($data);

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nafath.api.elm.sa/stg/api/v1/mfa/request/status',
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
        return $response;

     }

     // Callback Test Mode..
     public function callback1(Request $request) {

        print_r($request);

        $requestId = "d4bc1065-1aeb-45d6-a6a3-8f1b30e6b6a4";
        $_token = "";
        if ($this->token() && $this->token() != "") {
            $_token = json_decode($this->token(), true)['keys']['0']['n'];
        }

        $curl = curl_init();
        $data = array(
            "token" => $_token,
            "transId" => $request->transId,
            "requestid" => $requestId,
        );
        $data_string = json_encode($data);

        curl_setopt_array($curl, array(
            CURLOPT_URL => route('nidverification.callback1'),
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
        return $response;


        /*$req = Nafath::where('nationalId',$request->nationalId)
                ->where('random',$request->random)
                ->where('transId',$request->transId)
                ->get();
        if ($req->count() > 0){

        }*/

     }

     // Callback Live Mode..
     public function callback(Request $request) {
        return 'test';
     }

     // get token
     public function token() {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nafath.api.elm.sa/stg/api/v1/mfa/jwk',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'APP-ID: dc430d84',
                'APP-KEY: 148a170f077514fc3dd274650dfab30f',
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
     }


}
