<?php

namespace App\Http\Controllers;

use App\Models\Nafath;
use App\Models\User;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class NidVerificationController extends Controller
{

    use AuthenticatesUsers;

    public function gen_jwt($s_key):String{
        $signing_key = $s_key;
        $header = [
            "alg" => "HS256", //RS256
            "typ" => "RSA"
        ];
        $header = $this->base64_url_encode(json_encode($header));
        $payload =  [
            "sub" => "1234567890",
            "name" => "Sumou",
            "admin" => true,
            //"exp" => 0,
            //'iat' => time(),
        ];
        $payload = $this->base64_url_encode(json_encode($payload));
        $signature = $this->base64_url_encode(hash_hmac('sha256', "$header.$payload", $signing_key, true));
        $jwt = "$header.$payload.$signature";
        return $jwt;
    }

    /**
     * per https://stackoverflow.com/questions/2040240/php-function-to-generate-v4-uuid/15875555#15875555
     */
    public function base64_url_encode($text):String{
        return str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($text));
    }


    public function show(Request $request)
    {


        // Log::info('test 12 ' . $this->gen_jwt($n_jwk) );
        $n_jwk = "";
        if ($this->jwk() && $this->jwk() != "") {
            $n_jwk = json_decode($this->jwk(), true)['keys']['0']['n'];
        }
        $valtoken = $this->gen_jwt($n_jwk);




        return view('front.nidverify.show', compact('valtoken'));
    }

    // Verification ..
    public function send(Request $request)
    {
        $req = User::where('national_id', $request->national_id)->get();
        if ($req->count() > 0){
            $curl = curl_init();
            $data = array(
                "nationalId" => $request->national_id,
                "service" => "OpenAccountWithoutBio",
            );
            $data_string = json_encode($data);

            try {
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://nafath.api.elm.sa/stg/api/v1/mfa/request?local=ar&requestId=d4bc1065-1aeb-45d6-a6a3-8f1b30e6b6a4',
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
                $response = ['status' => 'false', 'message' => $e->getMessage()];
            }
        } else {
            $response = ['status' => 'false', 'message' => 'nouser'];
        }

        return $response;
    }

    public function sendregister(Request $request)
    {
        $req = User::where('national_id', $request->national_id)->get();
        if ($req->count() > 0){
            $response = ['status' => 'false', 'message' => 'existing'];
        } else {
            $curl = curl_init();
            $data = array(
                "nationalId" => $request->national_id,
                "service" => "OpenAccountWithoutBio",
            );
            $data_string = json_encode($data);

            try {
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://nafath.api.elm.sa/stg/api/v1/mfa/request?local=ar&requestId=d4bc1065-1aeb-45d6-a6a3-8f1b30e6b6a4',
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
                $response = ['status' => 'false', 'message' => $e->getMessage()];
            }
        }

        return $response;
    }


    // Confirmation ..
    public function confirm(Request $request) {

        $data = $request->all();
        Nafath::create($data);

        $usr = User::find(auth()->user()->id);
        $usr->national_id = $request->input('national_id');
        $usr->update();

        return "success";
    }

    // status..
    public function status(Request $request) {

        $curl = curl_init();
        $data = array(
            "nationalId" => $request->national_id,
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

    // getinfo Test Mode..
    public function getinfo(Request $request) {
        $requestId = "d4bc1065-1aeb-45d6-a6a3-8f1b30e6b6a4";
        $n_jwk = "";
        if ($this->jwk() && $this->jwk() != "") {
            $n_jwk = json_decode($this->jwk(), true)['keys']['0']['n'];
        }
        $token = $this->gen_jwt($n_jwk);

        $curl = curl_init();
        $data = array(
            "token" => $token,
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
                'Authorization: Bearer '.$token,
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

        $jsonData = file_get_contents('php://input');
        Log::info('kkk callback1 jsonData ' . $jsonData );
        $data_json = json_decode($jsonData, true);


        $requestId = "d4bc1065-1aeb-45d6-a6a3-8f1b30e6b6a4";
        $n_jwk = "";
        if ($this->jwk() && $this->jwk() != "") {
            $n_jwk = json_decode($this->jwk(), true)['keys']['0']['n'];
        }
        $token = $this->gen_jwt($n_jwk);

        $curl = curl_init();
        $data = array(
            "token" => $token,
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
                'Authorization: Bearer '.$token,
                'APP-ID: dc430d84',
                'APP-KEY: 148a170f077514fc3dd274650dfab30f',
            ),
        ));

        $response = curl_exec($curl);
        Log::info('kkk callback1 response ' . $response );

        curl_close($curl);
        return $response;

     }

     // Callback Live Mode..
     public function callback(Request $request) {
        return 'test';
     }

     // get jwk
     public function jwk() {

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


    //  Authenticate User
    public function authenticate(Request $request){

        $req = User::where('national_id', $request->national_id)->get();
        if ($req->count() > 0){
            if (Auth::loginUsingId($req[0]->id)){
                return 'success';
            } else {
                return 'error';
            }
        }
    }

    //  Register User
    public function register(Request $request){
        /*$user = User::create([
            'name' => $request->name,
            'national_id' => $request->national_id,
            'password' => $request->password,
        ]);*/
        $user = User::create([
            'name' => "ffff",
            'national_id' => "666666",
            'password' => "11111111",
        ]);
        if ($user){
            Auth::loginUsingId($user->id);
            return 'success';
        } else {
            return 'error';
        }
    }

    public function logman(){

        Auth::loginUsingId(13);
    }

}
