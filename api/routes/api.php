<?php

use App\Http\Controllers\V1\CreateRouanetProjectController;
use App\Http\Controllers\V1\DeleteRouanetProjectController;
use App\Http\Controllers\V1\GetAllRouanetProjectController;
use App\Http\Controllers\V1\GetByNameRouanetProjectController;
use App\Http\Controllers\V1\GetRouanetProjectController;
use App\Http\Controllers\V1\UpdateRouanetProjectController;
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

Route::get('V1/projects', [GetAllRouanetProjectController::class, 'index']);
Route::get('V1/projects/{idProjeto}', [GetRouanetProjectController::class, 'index']);
Route::get('V1/project', [GetByNameRouanetProjectController::class, 'index']);
Route::post('V1/projects', [CreateRouanetProjectController::class, 'index']);
Route::put('V1/projects/{idProjeto}', [UpdateRouanetProjectController::class, 'index']);
Route::delete('V1/projects/{idProjeto}', [DeleteRouanetProjectController::class, 'index']);
