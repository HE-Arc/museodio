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
      // $idUser = Auth::id();
      $idUser = 1;

      //TODO a changer;
      //$usersNoFriends =User::findOrFail($idUser)->nofriends;
      $usersNoFriends=[];

      $friends = User::findOrFail($idUser)->friends;

      $audio = [];
      foreach ($friends as $f) {
          array_push($audio, $f->audioNotes);
      }

      return view('friends')->with('nofriends',$usersNoFriends)->with('friends',$friends)->with('audio',$audio);
  //     return response()->json([
  //         "success" => [
  //             "friends" => $usersFriends,
  //             "noFriends" => $usersNoFriends
  //         ]
  //     ]
  // );
  }

  public function store(Request $request)
  {

      //TODO : Check validate and test this function
      $validatedData = $request->validate([
          'id' => 'required|numeric',
      ]);

     $friend=new Friends();

      $friends->user_id_1=1;
      $friends->user_id_2=$id;
      $friends->isAccepted = false;
      $friends->save();

      return response()->json("Successfuly uploaded friendship", 200);
  }

  public function update(Request $request)
  {
      $validatedData = $request->validate([
          'id' => 'required|numeric',
      ]);

      $user_id_2 = $request->id;
      $user_id_1= 1;

      $friend = Friends::getFriendsbyUsersId($user_id_1,$user_id_2);
      $friends->isAccepted = true;
      $friends->update();

      return response()->json("Successfuly update friendship", 200);
  }

  public function destroy(Request $request)
  {
      $validatedData = $request->validate([
          'id' => 'required|numeric',
      ]);

      //var_dump($request->id);

      $user_id_2 = $request->id;
      $user_id_1= 1;

      $friend = Friends::getFriendsbyUsersId($user_id_1,$user_id_2);
      $friends->destroy();

      return response()->json("Successfuly delete friendship", 200);
  }

  public function show(Request $request)
  {
      $this->index();
  }

}
