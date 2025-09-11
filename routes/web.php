<?php

use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.dashboard');
})
// ->middleware(['auth'])
->name('dashboard');


Route::get('login', function () {
    return view('auth.login');
})
->middleware('guest')
->name('login');