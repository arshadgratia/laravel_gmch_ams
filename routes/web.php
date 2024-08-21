<?php

use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\ProfessorMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login');
});
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');


Route::middleware('student')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
    Route::get('/add', [StudentController::class, 'show'])->name('student.add-activity');
    Route::post('/add', [StudentController::class, 'create'])->name('student.add-activity');


});


Route::middleware(ProfessorMiddleware::class)->group(function () {
    Route::get('/professor/students', [ProfessorController::class, 'index'])->name('professor.students');
    Route::get('/professor/students/{id}',[ProfessorController::class, 'show'])->name('professor.students.show');


});


