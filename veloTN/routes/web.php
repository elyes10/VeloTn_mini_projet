<?php

use App\Http\Controllers\BikeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\FondateurController;
use App\Http\Controllers\BookingBikeController;
use App\Http\Controllers\MailController;
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
    return view('FrontVues.Home_Front');
});

Route::get('/velotn', function () {
    return view('FrontVues.Home_Front');
});

Route::get('/lesassociations', [AssociationController::class, 'indexfront']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('sendbasicemail','App\Http\Controllers\MailController@basic_email');
Route::get('sendhtmlemail','App\Http\Controllers\MailController@html_email');
Route::get('sendattachmentemail','App\Http\Controllers\MailController@attachment_email');

Route::resource('mail', MailController::class);
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
Route::resource('bikes', BikeController::class);
Route::resource('events', EventController::class);
Route::resource('rides', RideController::class);
Route::resource('bookings', BookingBikeController::class);
Route::group(['middleware' => 'auth'], function () {
    Route::resource('fondateurs', FondateurController::class);
Route::resource('associations', AssociationController::class);
    Route::get('bikesmanagement', ['as' => 'bikes.index_backend', 'uses' => 'App\Http\Controllers\BikeController@indexback']);
    Route::get('bookingsmanagement', ['as' => 'bikes_booking.index_backend', 'uses' => 'App\Http\Controllers\BookingBikeController@indexback']);
    Route::get('eventsmanagement', ['as' => 'events.index_backend', 'uses' => 'App\Http\Controllers\EventController@indexback']);
    Route::get('ridesmanagement', ['as' => 'rides.index_backend', 'uses' => 'App\Http\Controllers\RideController@indexback']);
    Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

