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
      $success['token'] =  $user->createToken('MyApp')->accessToken;
      return response()->json(['success' => $success], 200);
    }
    else{
      return response()->json(['error'=>'Unauthorised'], 401);
    }
  }
}
