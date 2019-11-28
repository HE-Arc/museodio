<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/dashboard', function () {
  $user = Auth::user();
  return view('index', ['user'=> $user]);
})->middleware('auth:api');

Route::get('/', function (Request $request) {
  if($request->hasCookie('_token')){
    return redirect('/dashboard');
  }
  return view('index');
})->name("/");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
