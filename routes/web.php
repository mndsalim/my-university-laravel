<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function (){
    return view('pages.dashboard');
})
->middleware(['auth'])
->name('dashboard');



Route::post('login', [AuthController::class, 'loginPost'])->name('login-post');   


Route::get('login', [AuthController::class, 'login'])
->middleware('guest')
->name('login');