<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friends;
use App\User;

class FriendsController extends Controller
{

  public function index()
  {
      return view('friends')->with('users',User::all());
  }

  public function save(Request $request)
  {
      //TODO : Check validate and test this function
      $validatedData = $request->validate([
          'user_id_1' => 'numeric',
          'user_id_2' => 'numeric',
      ]);

      $user_id_1 = $request->user_id_1;
      $user_id_2 = $request->user_id_2;

      $friends = new Friends();
      $friends->user_id_1=$user_id_1;
      $friends->user_id_2=$user_id_2;

      $friends->save();

      return response()->json("Successfuly uploaded file", 200);
  }

}
