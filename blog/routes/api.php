<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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



Route::post('/blog-post/save',[ApiController::class,'store']);
Route::get('/blog-post/show/{id?}',[ApiController::class,'show']);
Route::put('/blog-post/update/{id}',[ApiController::class,'update']);
Route::delete('/blog-post/delete/{id}',[ApiController::class,'destroy']);
