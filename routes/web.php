<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeInvokable;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TagController;

Route::get('/', WelcomeInvokable::class)->name('welcome');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{post:slug}', [PostController::class, 'storeComment'])->name('posts.store_comment');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/tags/{tag:name}', [TagController::class, 'show'])->name('tags.show');

Auth::routes();
