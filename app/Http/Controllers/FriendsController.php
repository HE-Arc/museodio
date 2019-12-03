<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friends;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FriendsController extends Controller
{

  public function index()
  {
      //TODO
      // $idUser = Auth::id();
      $idUser = 1;

      $noFriends = User::findOrFail($idUser)->nofriends();
      $friends = User::findOrFail($idUser)->friends;
      $askfriends = User::findOrFail($idUser)->askfriends;


      //just for testing
      return view('friends')->with('nofriends',$noFriends)->with('friends',$friends)->with('askfriends',$askfriends);

      //TODO
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
      // TODO
      // $validatedData = $request->validate([
      //     'id' => 'required|numeric',
      // ]);
      // $user1 =User::findOrFail(Auth::id());
      // $user2 =User::findOrFail($request->id);

      //just for testing
      $user_id_1 =User::findOrFail(1);
      $user_id_2 =User::findOrFail(4);

      $user_id_1->addFriend($user_id_2);

      //just for testing
      return $this->index();

      //TODO
      //return response()->json("Successfuly uploaded friendship", 200);
  }

  public function update(Request $request)
  {
      //TODO
      // $validatedData = $request->validate([
      //     'id' => 'required|numeric',
      // ]);
      //
      // $user_id_2 = User::find($request->id);
      // $user_id_1 = User::find(Auth::id);

      //just for testing
      $user2 = 1;
      $user1 = 2;


      // $friend=Friends::where('user_id_1','=',$user1)->where('user_id_2','=',$user2)->orWhere(function($q) use ($user1,$user2){   $q->where('user_id_2','=',$user1)
      //       ->where('user_id_1','=',$user2);})->firstOrFail();
      //
      // //$friendId = Friends::getFriendsbyUsersId($user_id_1, $user_id_2);
      //
      // //$friendId=1;
      //
      // $friend->isAccepted = 1;
      // //dd($friend);
      //
      // dd($friend->save());
      $r = DB::update('update friends
      set isAccepted = 1
      where
      (user_id_1 = :u1 and  user_id_2 = :u2)
       or (user_id_1 = :u3 and  user_id_2 = :u4)',['u1'=>$user1,'u2'=>$user2,'u3'=>$user2,'u4'=>$user1]);
      //just for testing

      return $this->index();
      //TODO
     // return response()->json("Successfuly update friendship", 200);
  }

  public function destroy(Request $request)
  {
      //TODO
      // $validatedData = $request->validate([
      //     'id' => 'required|numeric',
      // ]);
      //
      // $user_id_2 = User::findOrFail($request->id);
      // $user_id_1=  User::findOrFail(Auth::id);

      //just for testing
      $user_id_1 = User::findOrFail(1);
      $user_id_2= User::findOrFail(4);

      $user_id_1->removeFriend($user_id_2);
      $user_id_2->removeFriend($user_id_1);


      //just for testing
      return $this->index();
      //TODO
      //return response()->json("Successfuly delete friendship", 200);
  }

  public function show(Request $request)
  {
      $this->index();
  }

}
