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
    
        $url = 'http://18.236.104.133/portal/index.php/welcome/getUserRed/' . 1000398;

        $curl = cURL::get($url);
  
       $curlJson = json_decode($curl);
        $data= [
            'data' => $curlJson
        ];
       /*$res= [
        'biz_rango' => 'Bitcoiner',
        'value' => '1000109',
        'c_doctype_id' => "10000047",
        'biz_saldo_usd' => '0.00',
        'biz_saldo_btc' => '0.00',
        'biz_rangoprox' => 'Bitcoiner Senior',
        'biz_maxiline' => '4',
        'biz_soc_der' => '14',
        'biz_soc_cen' => '6',
        'biz_soc_izq' => '6',
        'biz_veder' => '1',
        'biz_vecent' => '2',
        'biz_veizq' => '1',
        'biz_por_der' => '25',
        'biz_por_cen' => '50',
        'biz_por_izq' => '25',
        'biz_por_rango' => '33',
        'biz_volequipo' => '4'
       ];
       //$varss = json_encode($res);
        //$vars=  $varss->biz_rango;
      // DD($vars);
      // $collle = $this->userCollection->manejandoDatos($res);
      // DD($colle);
        $data = [
        'data' => $res
        ];*/
       return response()->json($data, 200);
    }
}
