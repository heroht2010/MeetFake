<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.index');
})->name('home');

Route::get('/ConferenceRoom', 'Home\ConferenceRoomController@viewConferenceRoom')->name('ConferenceRoom');

Route::get('/offRoom', function () {
    return view('home.ConferenceRoom.offRoom');
})->name('offRoom');

Route::get('/login/google', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallback');

