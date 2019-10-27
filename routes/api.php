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

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/audio-notes', 'AudioNoteController@index');

Route::post('/audio-notes/save', 'AudioNoteController@save');

Route::get('/audio-notes/download/{file_name}', 'AudioNoteController@download');

Route::get('/audio-notes/{longitude}/{latitude}/{outer_radius}', 'AudioNoteController@showNearAudioNotes');
