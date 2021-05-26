<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassesController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/class', ClassesController::class);


Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
    Route::post('/me', [App\Http\Controllers\AuthController::class, 'me']);
    Route::post('/payload', [App\Http\Controllers\AuthController::class, 'payload']);
    Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);

});
