<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserStores\UserStoreController;

Route::apiResource('user_stores',UserStoreController::class);
