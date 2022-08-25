<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\Activities\Platforms\Platforms\PlatformController;

Route::group(['prefix' => 'platforms'],
	function () {
		Route::get('', [PlatformController::class,'index']);
		Route::get('show/{id}', [PlatformController::class,'show']);
		Route::group([
			'middleware' => ['auth:api']
		], function () {
			Route::post('create', [PlatformController::class,'create']);
			Route::post('update', [PlatformController::class,'update']);
			Route::post('destroy', [PlatformController::class,'destroy']);
		});
	});
