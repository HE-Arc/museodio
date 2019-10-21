<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  /**
  * Login for API
  *
  * @return \Illuminate\Http\Response
  */
  public function login(){

    if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
      $user = Auth::user();
      $success['token'] =  $user->createToken('Museodio')->accessToken;
      $cookie = $this->getCookieDetails($success['token']);


      return response()->json(['success' => $success], 200)->cookie($cookie['name'],
      $cookie['value'],
      $cookie['minutes'],
      $cookie['path'],
      $cookie['domain'],
      $cookie['secure'],
      $cookie['httponly'],
      $cookie['samesite']);;
    }
    else{
      return response()->json(['error'=>'Unauthorised'], 401);
    }
  }


  private function getCookieDetails($token)
  {
    return [
      'name' => '_token',
      'value' => $token,
      'minutes' => 1440,
      'path' => null,
      'domain' => null,
      // 'secure' => true, // for production
      'secure' => null, // for localhost
      'httponly' => true,
      'samesite' => true,
    ];
  }
}
