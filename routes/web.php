<?php

use Illuminate\Support\Facades\Auth; // Import the Auth class

use Illuminate\Support\Facades\Route;

Route::get('hello', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
