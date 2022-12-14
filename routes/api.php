<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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
Route::get('/getUserInfo/{id}', [AuthController::class, 'getUserInfo']);
Route::post('/updateUserImg', [AuthController::class, 'updateUserImg']);


Route::post('/addfav', [\App\Http\Controllers\FavouriteController::class, 'addFav']);
Route::get('/gatfav', [\App\Http\Controllers\FavouriteController::class, 'getFav']);
Route::post('/delfav', [\App\Http\Controllers\FavouriteController::class, 'deleteFave']);
Route::post('/addpost', [PostController::class, 'add']);
Route::get('/getposts', [PostController::class, 'getPosts']);
Route::get('/userInfo/{id}', [PostController::class, 'userInfo']);
Route::get('/getUserPost/{id}', [PostController::class, 'getUserPost']);

Route::post('/addComment', [CommentController::class, 'addComment']);
Route::get('/getComments/{id}', [CommentController::class, 'getComments']);
Route::get('/getUserComments/{user_id}', [CommentController::class, 'getUserComment']);
