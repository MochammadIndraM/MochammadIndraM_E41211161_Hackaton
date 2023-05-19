<?php

use App\Http\Controllers\apiEnergiController;
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
Route::get('/energi', [apiEnergiController::class, 'index']);
Route::post('/energi', [apiEnergiController::class, 'store']);
Route::put('/energi/{id}', [apiEnergiController::class, 'update']);
Route::delete('/energi/{id}', [apiEnergiController::class, 'destroy']);
