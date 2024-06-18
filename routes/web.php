<?php

<<<<<<< HEAD
use App\Http\Controllers\produkController;
use App\Http\Controllers\userController;
=======
>>>>>>> 3082336c7c3b28502af6746733cd7ba4f62ea957
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD


Route::get('/login' , [userController::class , 'index'])->name('login')->middleware('guest'); 
Route::post('/login/auth' , [userController::class , 'authenticate']);  


Route::get('/register' , [userController::class , 'registerForm'])->middleware('guest'); 
Route::get('/' , [produkController::class , 'index']);  
=======
>>>>>>> 3082336c7c3b28502af6746733cd7ba4f62ea957
