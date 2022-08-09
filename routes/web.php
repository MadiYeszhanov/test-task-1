<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\ArticleController::class, 'main'])->name('app.index');
Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');
Route::post('/articles/{id}/like', [\App\Http\Controllers\ArticleController::class, 'addLike'])->name('articles.like');
Route::post('/articles/{id}/watch', [\App\Http\Controllers\ArticleController::class, 'addWatch'])->name('articles.watch');
