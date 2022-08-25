<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\Activities\ActivityTypes\ActivityTypes\ActivityTypeController;

Route::group(['prefix' => 'activity_types'],
	function () {
		Route::get('', [ActivityTypeController::class,'index']);
		Route::get('show/{id}', [ActivityTypeController::class,'show']);
		Route::group([
			'middleware' => ['auth:api']
		], function () {
			Route::post('create', [ActivityTypeController::class,'create']);
			Route::post('update', [ActivityTypeController::class,'update']);
			Route::post('destroy', [ActivityTypeController::class,'destroy']);
		});
	});
