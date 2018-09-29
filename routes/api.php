<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| apiResource()
|--------------------------------------------------------------------------
|
| When building APIs with Laravel, it is recommended to use the apiResource()
| method while defining resourceful routes.
| This will generate only API specific routes (index, store, show, update and destroy)
|
*/
Route::apiResource('logs', 'LogController');
Route::apiResource('devices', 'DeviceController');
