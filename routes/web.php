<?php

<<<<<<< HEAD
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
>>>>>>> 22adb1fa2969f5ab9ccb162031ac5011abf2ffd6

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::resource('student',StudentController::class);
=======
Route::resource('category',CategoryController::class);
>>>>>>> 22adb1fa2969f5ab9ccb162031ac5011abf2ffd6
