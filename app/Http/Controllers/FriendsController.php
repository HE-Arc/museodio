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

    $userFriends = Auth::user()->friends;
    $userInvitationsWaitingForAnswer = Auth::user()->invitationsWaitingForAnswer;
    $userInvitationsToAnswer = Auth::user()->invitationsToAnswer;

    return response()->json([
        "success" => [
            "friends" => $userFriends,
            "invitationsWaitingForAnswer" => $userInvitationsWaitingForAnswer,
            "invitationsToAnswer" => $userInvitationsToAnswer
        ]
    ]
  );
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

    $user1 = Auth::user();
    $user2 = User::findOrFail($request->id);

    if($user1->invitationsToAnswer->contains($user2)){
      $response = DB::update('update friends set isAccepted = 1 where user_id_1 = :u1 and user_id_2 = :u2 ', ['u1' => $user2->id, 'u2' => $user1->id]);
    }
    else if($user1->friends->contains($user2)){
      $errorMessage = "You already are friend with " . $user2->firstname;
      return response()->json(["error" => ["error" => $errorMessage]]);
    }
    else if($user1->invitationsWaitingForAnswer->contains($user2)){
      $errorMessage = "You already requested friendship with " . $user2->firstname;
      return response()->json(["error" => ["error" => $errorMessage]]);
    }
    else{
      $user1->addFriend($user2);
    }

    return response()->json("Successfuly requested friendship", 200);
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

    $user1 = User::find($request->id);
    $user2 = Auth::user();

    $response = DB::update('update friends set isAccepted = 1 where user_id_1 = :u1 and user_id_2 = :u2 ', ['u1' => $user1->id, 'u2' => $user2->id]);

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

    $user2 = User::findOrFail($request->id);
    $user1 = Auth::user();

    Friends::where('user_id_1', $request->id)->where('user_id_2', Auth::id())->delete();

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
