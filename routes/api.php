<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//
//
//
//    return $request->user();
//
//});


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});


//Create First Api 28/8


Route::middleware(['jwt.verify'])->group(function () {

    Route::get('/ins', [\App\Http\Controllers\Api\InsurenceApiController::class, 'index']);
    Route::post('/ins', [\App\Http\Controllers\Api\InsurenceApiController::class, 'store']);

    Route::get('/ins/{id}', [\App\Http\Controllers\Api\InsurenceApiController::class, 'show']);
    Route::get('/ins/{id}', [\App\Http\Controllers\Api\InsurenceApiController::class, 'update']);
    Route::get('/ins/{id}', [\App\Http\Controllers\Api\InsurenceApiController::class, 'destroy']);



});

