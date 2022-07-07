<?php

use App\Http\Controllers\ClientController\ChatController;
use App\Http\Controllers\ClientController\MessageController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//chat routes
Route::middleware('auth:sanctum')->get('/chat-index',[ChatController::class,'index']);
Route::middleware('auth:sanctum')->get('/chat-show',[ChatController::class,'show']);
Route::middleware('auth:sanctum')->post('/chat-start/{id}' ,[ChatController::class,'store']);
Route::middleware('auth:sanctum')->post('/send-message/{id}' ,[MessageController::class,'store']);




