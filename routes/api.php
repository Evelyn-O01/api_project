<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\AssignedLabController;
use App\Models\AssignedLab;
use App\Models\Subject;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::apiResource('subjects', SubjectController::class);
Route::apiResource('groups', GroupController::class);
Route::apiResource('teachers', TeacherController::class);
Route::apiResource('classrooms', ClassroomController::class);
Route::apiResource('laboratories', LaboratoryController::class);
Route::apiResource('assigned_labs', AssignedLabController::class);
