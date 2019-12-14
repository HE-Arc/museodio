<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Friends;
use App\User;

class FriendsController extends Controller
{

  /**
 * Index function of the FriendsController
 *
 * @return
 */
  public function index(){

    $idUser=1;
   // $idUser = Auth::id();
    $usersNoFriends = User::findOrFail($idUser)->nofriends();
    $usersFriends = User::findOrFail($idUser)->friends;
    $usersAskFriends = User::findOrFail($idUser)->askfriends;

   // dd($idUser);
    //just for testing
    return view('friends')->with('nofriends',$usersNoFriends)->with('friends',$usersFriends)->with('askfriends',$usersAskFriends);

  //   return response()->json([
  //       "success" => [
  //           "friends" => $usersFriends,
  //           "noFriends" => $usersNoFriends,
  //            "askfriends" => $usersAskFriends
  //       ]
  //   ]
  // );
  }

  /**
 * Method to create a friendship between two users
 *
 * @return
 */
  public function store(Request $request){
    $validatedData = $request->validate([
        'id' => 'required|numeric',
    ]);

    $user1 =User::findOrFail(Auth::id());
    $user2 =User::findOrFail($request->id);

    $user_id_1->addFriend($user_id_2);

    return response()->json("Successfuly uploaded friendship", 200);
  }

  /**
 * Method to update a friendship that mean accept the friendship
 *
 * @return
 */
  public function update(Request $request){
    $validatedData = $request->validate([
        'id' => 'required|numeric',
    ]);

    $user_id_1 = User::find($request->id);
    $user_id_2 = User::find(Auth::id());

      $response = DB::update('update friends set isAccepted = 1 where user_id_1 = :u1 and user_id_2 = :u2 ', ['u1' => $user_id_1, 'u2' => $user_id_2]);

      return response()->json("Successfuly updated friendship", 200);
  }

  /**
 * Method to delete a friendship between two users
 *
 * @return
 */
  public function destroy(Request $request) {
    $validatedData = $request->validate([
        'id' => 'required|numeric',
    ]);

    $user_id_2 = User::findOrFail($request->id);
    $user_id_1=  User::findOrFail(Auth::id());

    $user_id_1->removeFriend($user_id_2);
    $user_id_2->removeFriend($user_id_1);

      return response()->json("Successfuly deleted friendship", 200);
  }

  /**
 * Method to show all the friendships
 *
 * @return
 */
  public function show(Request $request){
    $this->index();
  }

}
