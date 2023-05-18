<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Controller::class, "index"]);
Route::get('/product', [App\Http\Controllers\ProductController::class, "show"]);
Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, "edit"]);

Route::get('/add-blog', [App\Http\Controllers\BlogController::class, "create"]);
Route::post('/save-blog', [App\Http\Controllers\BlogController::class, "insert"]);
Route::get('/blogs', [App\Http\Controllers\BlogController::class, "index"]);
Route::get('/blog', [App\Http\Controllers\BlogController::class, "index"]);

Route::get('/blog-edit/{id}', [App\Http\Controllers\BlogController::class, "edit"]);
Route::post('/blog-update/{id}', [App\Http\Controllers\BlogController::class, "update"]);
Route::get('delete/{id}', [App\Http\Controllers\BlogController::class, "delete"]);