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

//calendar
Route::get('indexCalendar/{provider_id}','CalendarController@index');
Route::get('listEvent/{provider_id}','CalendarController@listEvent');
Route::post('eventStore','CalendarController@store');
Route::post('eventUpdate','CalendarController@update');
Route::post('eventDelete','CalendarController@delete');
Route::get('/logout', 'CalendarController@logout');
Route::get('/calendar',function(){

	return view('welcome');
});

//Chat
// Truyển message lên server Pusher
 Route::get('fire-event','ChatController@fireEvent');