<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [UserController::class, 'showIndex']);

Route::get('/welcome', [UserController::class, 'showIndex']);

Route::get('/', function(){
    return view('signin');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::post('register', [UserController::class, 'createAccount']);