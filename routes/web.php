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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', App\Http\Controllers\ArticleController::class);
// リソースを使用しない場合
// Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'index']);
// Route::get('/articles/create', [App\Http\Controllers\ArticleController::class, 'create']);
// Route::post('/articles', [App\Http\Controllers\ArticleController::class, 'store']);
// Route::get('/articles/{article}', [App\Http\Controllers\ArticleController::class, 'show']);
// Route::get('/articles/{article}/edit', [App\Http\Controllers\ArticleController::class, 'edit']);
// Route::patch('/articles{article}', [App\Http\Controllers\ArticleController::class, 'update']);
// Route::delete('/articles/{article}', [App\Http\Controllers\ArticleController::class, 'destroy']);
