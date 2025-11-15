<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\AssignedLabController;
use App\Http\Controllers\AssignedClassController;
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
Route::apiResource('assigned_classes', AssignedClassController::class);


//Route::get('/subjects', [SubjectController::class, 'index']);
//Route::get('/subjects{id}', [SubjectController::class, 'show']);
//Route::post('/subjects', [SubjectController::class, 'store']);
//Route::put('/subjects/{id}', [SubjectController::class, 'update']);
//Route::delete('/subjects/{id}', [SubjectController::class, 'destroy']);

//Route::get('/groups', [GroupController::class, 'index']);
//Route::get('/groups/{id}', [GroupController::class, 'show']);
//Route::post('/groups', [GroupController::class, 'store']);
//Route::put('/groups/{id}', [GroupController::class, 'update']);
//Route::delete('/groups/{id}', [GroupController::class, 'destroy']);

//Route::get('/teachers', [TeacherController::class, 'index']);
//Route::get('/teachers/{id}', [TeacherController::class, 'show']);
//Route::post('/teachers', [TeacherController::class, 'store']);
//Route::put('/teachers/{id}', [TeacherController::class, 'update']);
//Route::delete('/teachers/{id}', [TeacherController::class, 'destroy']);
