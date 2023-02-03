<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', 'App\Http\Controllers\TemplateController@index');
Route::get('/home', function () {
    return view('FrontEnd.home');
});
Route::view('register','auth.register');
Route::post('store',[RegisterController::class,'store']);
Route::view('homepage','homepage');

Route::view('login','auth.login');
Route::post('authenticate',[LoginController::class, 'authenticate']);

Route::middleware(['auth'])->get('/userinfo', 'RegisterController@userinfo');

Route::get('/edit-profile-picture', 'ProfilePictureController@edit')->middleware('auth');
Route::post('/update-profile-picture', 'ProfilePictureController@update')->name('profile.update-picture');
Route::post('/profile/update-picture', 'ProfilePictureController@uploadProfilePicture')->name('profile.update-picture');


