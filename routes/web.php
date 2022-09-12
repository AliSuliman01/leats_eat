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
    return view('welcome');
});

//Route::controller(\App\Http\Controllers\Users\Users\UserController::class)->prefix('users')->group(function(){
//// Google login
//Route::get('login/google', 'redirectToGoogle');
//Route::get('login/google/callback', 'handleGoogleCallback');
//
//// Facebook login
//    Route::get('login/facebook','redirectToFacebook');
//    Route::get('login/facebook/callback', 'handleFacebookCallback');
//
//});
