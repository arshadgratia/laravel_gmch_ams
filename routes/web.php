<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/dashboard', function () {
    return view('student.dashboard');
})->name('student.dashboard');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', function () {
    dd(request()->all());
})->name('login');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', function () {
    dd(request()->all());
})->name('register');
