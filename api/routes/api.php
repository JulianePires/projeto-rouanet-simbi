<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('rouanetProject/{id}', 'GetRouanetProjectController');
Route::get('rouanetProject', 'GetByNameRouanetProjectController');
Route::get('rouanetProject/all', 'GetAllRouanetProjectController');
Route::post('rouanetProject', 'CreateRouanetProjectController');
Route::put('rouanetProject/{id}', 'UpdateRouanetProjectController');
Route::delete('rouanetProject/{id}', 'DeleteRouanetProjectController');
