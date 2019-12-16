<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

  /**
 * Seach user by firstname
 *
 * @return App\User
 */
  public function searchUsers(Request $request) {
    $queryName = $request->query_name;
    return User::where('firstname', 'like', "%{$queryName}%")->value('firstname');
  }
}
