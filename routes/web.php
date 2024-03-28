<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ClassroomController;

Route::get('/', function () {
    return view('layout');
    //return view('login');
});

Route::resource('/students', StudentController::class);
Route::resource('/teachers', TeacherController::class);
Route::resource('/subjects', SubjectController::class);
Route::resource('/modules', ModuleController::class);
Route::resource('/classrooms', ClassroomController::class);
