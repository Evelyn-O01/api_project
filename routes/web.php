<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GroupController;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::apiResource('subjects', SubjectController::class);
Route::apiResource('groups', GroupController::class);
Route::apiResource('teachers', TeacherController::class);
