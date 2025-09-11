<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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





Route::prefix('users')->as('users.')->group(function () {
    
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');


});