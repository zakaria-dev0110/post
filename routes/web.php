<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name("posts.home");

Route::get('/index', [PostController::class, 'index'])->name("posts.index");

Route::get('/posts/{id}', [PostController::class, 'show'])->name("posts.show");
