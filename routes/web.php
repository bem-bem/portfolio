<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeInvokable;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TagController;

Auth::routes();

Route::get('/', WelcomeInvokable::class)->name('welcome');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post.show');
Route::post('/posts/{post:slug}', [PostController::class, 'storeComment'])->name('post.store_comment');

Route::get('/contacts', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contact.store');

Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');

Route::get('/tags/{tag:name}', [TagController::class, 'show'])->name('tag.show');

// admin 
Route::prefix('dashboard')->name('admin.')->middleware(['auth','is.admin'])->group(function() {
  Route::get('/', [AdminDashboardController::class, 'index'])->name('index');
  Route::resource('/posts', AdminPostController::class);
  Route::resource('/categories', AdminCategoryController::class);
});