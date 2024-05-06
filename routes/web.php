<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/courses/:id', [CourseController::class, 'show'])->name('course.detail');
