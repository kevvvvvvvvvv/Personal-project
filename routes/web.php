<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[AppController::class,'home'])->name('app.home');
Route::get('home/book',[AppController::class,'book'])->name('app.book');
Route::get('home/result',[AppController::class,'result'])->name('app.result');