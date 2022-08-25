<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\Roles\RoleController;

Route::apiResource('roles',RoleController::class);
