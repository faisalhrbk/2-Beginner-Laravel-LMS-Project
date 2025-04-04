<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});
Route::resource('student', StudentController::class);
Route::resource('teacher', StudentController::class);
