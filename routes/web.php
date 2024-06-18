<?php

use App\Http\Controllers\produkController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login' , [userController::class , 'index'])->name('login')->middleware('guest'); 
Route::post('/login/auth' , [userController::class , 'authenticate']);  


Route::get('/register' , [userController::class , 'registerForm'])->middleware('guest'); 
Route::get('/' , [produkController::class , 'index']);  
