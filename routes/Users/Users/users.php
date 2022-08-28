<?php

use App\Http\Controllers\Users\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->prefix('users')->group(function(){
   Route::post('login', 'log_in');
   Route::post('sign_up', 'sign_up');
   Route::post('logout', 'logout')->middleware('auth:api');
   Route::post('change_password', 'change_password');
   Route::post('reset_password', 'reset_password');

   Route::get('', 'index');
});
