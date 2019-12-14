<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

  public function searchUsers(Request $request) {
    $queryName = $request->query_name;

    $searchResults = User::query()
   ->where('id', '!=', Auth::id())
   ->where('firstName', 'LIKE', "%{$queryName}%")
   ->orWhere('lastName', 'LIKE', "%{$queryName}%")
   ->orWhere('email', 'LIKE', "%{$queryName}")
   ->get()
   ->makeHidden(['email', 'created_at', 'updated_at']);

    return response()->json(["success" => $searchResults], 200);
  }

}
