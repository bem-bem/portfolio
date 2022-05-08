<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeInvokable;

Route::get('/', WelcomeInvokable::class)->name('welcome');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{post:slug}', [PostController::class, 'storeComment'])->name('posts.store_comment');

Auth::routes();
