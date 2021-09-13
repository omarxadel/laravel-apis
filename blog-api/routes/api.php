<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

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

Route::get('articles', [ArticleController::class, 'index']);
Route::get('articles/{id}', [ArticleController::class, 'show']);
Route::post('articles', [ArticleController::class, 'store']);
Route::put('articles/{article}', [ArticleController::class, 'update']);
Route::delete('articles/{article}', [ArticleController::class, 'delete']);

Route::get('profile/{id}', [ArticleController::class, 'user']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{user}', [UserController::class, 'update']);
Route::delete('users/{user}', [UserController::class, 'delete']);

Route::get('articles/{id}/comments', [CommentController::class, 'show']);
Route::post('articles/{id}/comments', [CommentController::class, 'store']);
Route::put('articles/{id}/comments', [CommentController::class, 'update']);
Route::delete('articles/{id}/comments', [CommentController::class, 'delete']);
