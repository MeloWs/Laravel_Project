<?php

use App\Http\Controllers\PostController;
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
Route::get('post', [PostController::class, 'index'])->name('post');
Route::get('post/create', [PostController::class, 'create']);
Route::post('post/store', [PostController::class, 'store'])->name('post.store');
Route::get('post/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/{id}/update', [PostController::class, 'update'])->name('post.update');
Route::get('post/{id}/delete', [PostController::class, 'destroy'])->name('post.delete');
