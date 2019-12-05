<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

  public function searchUsers(Request $request) {
    $queryName = $request->query_name;

    return User::where('firstname', 'like', "%{$queryName}%")->value('firstname');
  }

}
