<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tweet;
use App\Http\Controllers\TweetController;

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

Route::get('/', function () {
  $tweets = Tweet::all();

  return view('welcome', [
    'message' => 'Tweets',
    'tweets' => $tweets,
  ]);
});

Route::get('/create-tweet', function () {
  return view('create-tweet', [
    'message' => "Create a Tweet",
  ]);
});

Route::resource('tweets', TweetController::class);
