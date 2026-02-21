<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::get('/', function () {
    return view('welcome');
});


//index page route
route::get('/index',[IndexController::class,'index']);



//Laravel auth routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
