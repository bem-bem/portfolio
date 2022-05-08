<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeInvokable;
use App\Http\Controllers\ContactController;

Route::get('/', WelcomeInvokable::class)->name('welcome');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{post:slug}', [PostController::class, 'storeComment'])->name('posts.store_comment');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();
