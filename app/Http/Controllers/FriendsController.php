<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friends;
use App\User;
use Illuminate\Support\Facades\Auth;

class FriendsController extends Controller
{

  public function index()
  {
      //TODO
      //return view('friends')->with('users', User::all())->with('friends',Friends::all());
      // $idUser = Auth::id();

      $idUser = 1;

      //TODO a changer
      $friends=Friends::all();
      $users = User::all();
      $usersFriends=[];
      $usersNoFriends=[];
      foreach ($users as $keyUser => $valueUser) {

          if ($valueUser->id != $idUser) {
              $i =0;
              foreach ($friends as $keyFriend => $valueFriend) {

                 if($valueFriend->user_id_1 == $idUser && $valueFriend->user_id_2 ==$valueUser->id ){
                     //$usersFriends.add()
                     array_push($usersFriends,User::getUserById($valueFriend->user_id_2));
                     $i=$i+1;
                 }
                 elseif ($valueFriend->user_id_2 == $idUser && $valueFriend->user_id_1 == $valueUser->id) {
                     array_push($usersFriends,User::getUserById($valueFriend->user_id_1));
                     $i=$i+1;
                 }
              }
              if($i <= 0)
              {
                      array_push($usersNoFriends,User::getUserById($valueUser->id));
              }
          }

      }

      return view('friends')->with('friends',Friends::getAllFriends($idUser))->with('users',Friends::getAllNoFriends($idUser))->with('fr',$usersFriends)->with('nofr',$usersNoFriends);
  }

  public function save(Request $request)
  {
      //TODO : Check validate and test this function
      $validatedData = $request->validate([
          'user_id_1' => 'required|numeric',
          'user_id_2' => 'required|numeric',
          'isAccepted' => 'required|boolean'
      ]);

      $user_id_1 = $request->user_id_1;
      $user_id_2 = $request->user_id_2;
      $friends = new Friends();
      $friends->user_id_1=$user_id_1;
      $friends->user_id_2=$user_id_2;
      $friends->isAccepted = false;
      $friends->save();

      return response()->json("Successfuly uploaded friendship", 200);
  }

  public function update(Request $request)
  {
      $validatedData = $request->validate([
          'user_id_1' => 'required|numeric',
          'user_id_2' => 'required|numeric',
          'isAccepted' => 'required|boolean'
      ]);

      $user_id_1 = $request->user_id_1;
      $user_id_2 = $request->user_id_2;
      $friends = new Friends();
      $friends->user_id_1 = $user_id_1;
      $friends->user_id_2 = $user_id_2;
      $friends->isAccepted = true;
      $friends->update();

      return response()->json("Successfuly update friendship", 200);
  }

  public function destroy(Request $request)
  {
      $validatedData = $request->validate([
          'user_id_1' => 'required|numeric',
          'user_id_2' => 'required|numeric',
          'isAccepted' => 'required|boolean'
      ]);

      $user_id_1 = $request->user_id_1;
      $user_id_2 = $request->user_id_2;
      $isAccepted = $request->isAccepted;
      $friends = new Friends();
      $friends->user_id_1 = $user_id_1;
      $friends->user_id_2 = $user_id_2;
      $friends->isAccepted = $isAccepted;
      $friends->destroy();

      return response()->json("Successfuly delete friendship", 200);
  }
}
