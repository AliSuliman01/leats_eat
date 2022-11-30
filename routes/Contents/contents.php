<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contents\ContentController;

Route::apiResource('contents',ContentController::class);
