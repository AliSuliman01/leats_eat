<?php

use App\Http\Controllers\Users\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->prefix('users')->group(function(){
   Route::post('login', 'log_in');
   Route::post('sign_up', 'sign_up');

   Route::get('', 'index');
});
