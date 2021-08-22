<?php

namespace App\Http\Controllers\Anasite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request){

        dd('Burada Hataveriyor');
//        $http = new \GuzzleHttp\Client();
//
//        try{
//            $response = $http->post(config('services.passport.login_endpoint'),[
//               'form-params' => [
//                   'grant_type' => 'password',
//                   'client_id' => config('services.passport.client_id'),
//                   'client_secret' => config('services.passport.client_secret'),
//                   'username' => $request->username,
//                   'password' => $request->password,
//               ]
//            ]);
//            //return json_decode((string) $response->getBody(),true);
//            return $response->getBody();
//
//        }catch (\GuzzleHttp\Exception\BadResponseException $e){
//            if($e->getCode() === 400 ){
//                return $response->json('Şifre Yada Emaili tekrar giriniz. Hata: '+$e->getCode());
//            }else if ($e->getCode()===401){
//                return $response->json('Tekrar Deneyin. Hata: '+$e->getCode());
//            }
//
//            return $response->json("Server'da Hata oluştu. Hata :" + $e->getCode());
//        }

    }
}
