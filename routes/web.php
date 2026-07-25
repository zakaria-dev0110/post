<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name("posts.home");

Route::get('/index', [PostController::class, 'index'])->name("posts.index"); // Modified

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Modified

Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Modified

Route::get('/posts/{id}', [PostController::class, 'show'])->name("posts.show"); // Modified

Route::post('/posts/{id}', [PostController::class, 'update'])->name("posts.update"); // Modified

