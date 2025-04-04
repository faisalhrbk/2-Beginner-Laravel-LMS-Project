<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});
Route::prefix('student')->controller(StudentController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('student.dashboard');
    Route::get('login', 'login')->name('student.login');
    Route::post('login', 'loginPost')->name('student.login.post');
    Route::get('register', 'register')->name('student.register');
    Route::post('register', 'registerPost')->name('student.register.post');
});
