<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    } else {
        return redirect()->route('login');
    }
});

Route::group(['middleware'=>'guest'],function(){
    Route::get('/login',[LoginController::class,'create'])->name('login');
    Route::post('login',[LoginController::class,'store'])->name('login.store');

    Route::get('register',[RegistrationController::class,'create'])->name('register');
    Route::post('register',[RegistrationController::class,'store'])->name('register.store');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[Homecontroller::class,'index'])->name('home');
    Route::get('post',[Homecontroller::class,'post'])->name('post');
    Route::get('profiles/edit',[ProfileController::class,'edit'])->name('profile.edit');
    Route::post('profiles/update',[ProfileController::class,'update'])->name('profile.update');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});



