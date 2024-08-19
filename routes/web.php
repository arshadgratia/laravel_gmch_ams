<?php

use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Models\Activity;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');


Route::get('/login',[ SessionController::class, 'create'])->name('login');
Route::post('/login',[ SessionController::class, 'store'])->name('login');
Route::post('/logout' ,[SessionController::class, 'destroy'])->name('logout');




// Route::post('/register', function () {
//     dd(request()->all());
// })->name('register');

Route::get('/register' ,[RegisteredUserController::class, 'create'])->name('register');
Route::post('/register' ,[RegisteredUserController::class, 'store'])->name('register');

Route::get('/professor/students',[ProfessorController::class, 'index'])->name('professor.students');

