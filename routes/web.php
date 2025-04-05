<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});
//todo Student Routes
Route::prefix('student')->controller(StudentController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('student.dashboard');
    Route::get('login', 'login')->name('student.login');
    Route::post('login', 'loginPost')->name('student.login.post');
    Route::get('register', 'register')->name('student.register');
    Route::post('register', 'registerPost')->name('student.register.post');
    // for update student
    Route::get('edit', 'editProfile')->name('student.edit');
    Route::post('edit', 'editProfilePost')->name('student.edit.post');
    //for student logout
    Route::get('logout', 'logout')->name('student.logout');
});

//todo Teacher Routes
Route::prefix('teacher')->controller(TeacherController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('teacher.dashboard');
    Route::get('login', 'login')->name('teacher.login');
    Route::post('login', 'loginPost')->name('teacher.login.post');
    Route::get('register', 'register')->name('teacher.register');
    Route::post('register', 'registerPost')->name('teacher.register.post');
    // for update teacher
    Route::get('edit', 'editProfile')->name('teacher.edit');
    Route::post('edit', 'editProfilePost')->name('teacher.edit.post');
    //for teacher logout
    Route::get('logout', 'logout')->name('teacher.logout');
    // teacher course
    Route::get('add-course', 'addCourse')->name('teacher.add.course');
    Route::post('add-course', 'addCoursePost')->name('teacher.add.course.post');
    Route::get('edit-course/{$id}', 'editCourse')->name('teacher.course.edit');
    Route::post('edit-course/{$id}', 'editCoursePost')->name('teacher.edit.course.post');
    Route::delete('delete-course/{$id}', 'deleteCourse')->name('teacher.course.delete');
});
