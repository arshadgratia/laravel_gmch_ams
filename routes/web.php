<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/dashboard', function () {
    return view('student.dashboard');
})->name('student.dashboard');


Route::get('/login',[ SessionController::class, 'create'])->name('login');
Route::post('/login',[ SessionController::class, 'store'])->name('login');
Route::post('/logout' ,[SessionController::class, 'destroy'])->name('logout');



//Route::post('/register', function () {
//    dd(request()->all());
//})->name('register');

Route::get('/register' ,[RegisteredUserController::class, 'create'])->name('register');
Route::post('/register' ,[RegisteredUserController::class, 'store'])->name('register');

