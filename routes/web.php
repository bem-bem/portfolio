<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeInvokable;

Route::get('/', WelcomeInvokable::class)->name('welcome');

Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('posts.show');

Auth::routes();
