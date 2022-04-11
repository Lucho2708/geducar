<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register',[
    App\Http\Controllers\Api\RegisterController::class,
    'register'
]);

Route::apiResource('v1/post', App\Http\Controllers\Api\V1\PostController::class)
->only(['index', 'show', 'store']);

Route::apiResource('v1/video', App\Http\Controllers\Api\V1\VideoController::class)
->only(['index', 'show', 'store']);

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);