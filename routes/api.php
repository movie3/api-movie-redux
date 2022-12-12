<?php

use App\Http\Controllers\AuthController;
use App\Models\Favourite;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/update', [AuthController::class, 'updateUser']);


Route::post('/addfav', [\App\Http\Controllers\FavouriteController::class, 'addFav']);
Route::get('/gatfav', [\App\Http\Controllers\FavouriteController::class, 'getFav']);
