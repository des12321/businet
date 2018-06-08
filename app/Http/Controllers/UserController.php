<?php

namespace App\Http\Controllers;


use anlutro\cURL\Laravel\cURL;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Cookie;


class UserController extends BaseController
{
    public function __construct(){
        
    }

    public function showLogin(Request $request)
    {
        $cookieBank = $request->cookie("businetbybinanceusernamevalueusername");
        if (!empty($cookieBank)) {
            return view('core.lobby');
        } else {
            $cookie = Cookie::forget('businetbybinanceusernamevalueusername');
            $response = new \Illuminate\Http\Response(view('auth.login'));
            $response->withCookie($cookie);
            return $response;
        }

    }

    public function showRegistration()
    {
        return view('auth.registration');
    }

    public function fillTopBanner(Request $request)
    {
        $response = new \Illuminate\Http\Response();
        $cookieUser = $request->cookie("businetbybinanceusernamevalueusername");
    
        $url = 'http://18.236.104.133/portal/index.php/welcome/getUserRed/' . $cookieUser;
        DD($url);
        $curl = cURL::get($url);

       $curlJson = json_decode($curl);
        $data= [
            'data' => $curlJson
        ];

       return response()->json($data, 200);
    }
}
