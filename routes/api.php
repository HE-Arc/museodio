<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout')->middleware('auth:api');

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});


Route::get('/users/search/{query_name}', 'UserController@searchUsers');


Route::get('/audio-notes/', 'AudioNoteController@index');

Route::middleware('auth:api')->post('/audio-notes/save', 'AudioNoteController@save');

Route::middleware('auth:api')->get('/audio-notes/download/{file_name}', 'AudioNoteController@download');

Route::middleware('auth:api')->get('/audio-notes/{longitude}/{latitude}/{outer_radius}', 'AudioNoteController@showNearAudioNotes');

//TODO: a modifier ?
//Route::resource('/friends','FriendsController');
