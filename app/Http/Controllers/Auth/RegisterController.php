<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
    *  Register in the API
    *
    * @return
    */
    public function register(Request $request){
      $validator = Validator::make($request->all(), [
        'firstname' => ['required', 'string', 'max:255'],
        'lastname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);

      if($validator->fails()){
        return response()->json(['error' => $validator->errors()], 200);
      }

      $user = User::create([
          'firstname' => $request['firstname'],
          'lastname' => $request['lastname'],
          'email' => $request['email'],
          'password' => Hash::make($request['password']),
      ]);

      // $token = $user->createToken('Museodio')->accessToken;
      // return response()->json(['success' => $token]);

      return \App::call('App\Http\Controllers\Auth\LoginController@login');
    }


}
