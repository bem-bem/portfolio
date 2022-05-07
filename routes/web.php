<?php

use App\Http\Controllers\WelcomeInvokable;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeInvokable::class)->name('welcome');

Auth::routes();
