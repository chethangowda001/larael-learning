<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userControler;
use App\Http\Controllers\studentController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\StudentsControl;

// Route::get('/', function () {
//     return view('home');
// });


Route::view('/home',"home");
Route::view('/dyna1/{name}', "userName");
Route::get('user/users/try',[UserController::class, 'getusers'])->name("la");
Route::get("see", [UserController::class, 'seeusers']);



Route::post('addUser', [userControler::class, 'userForm']);

Route::prefix("student")->group(function(){
    Route::get('dyna/{name}',[UserController::class, 'dynaUsers']);
Route::get('admin/',[UserController::class, 'adminPage']);
Route::view('/wel/home/try','welcome')->middleware("check1");;
Route::view('user-form', "userForm")->middleware("check1");
});

Route::prefix("student/indian")->group(function(){
    Route::get('dyna/{name}',[UserController::class, 'dynaUsers']);
Route::get('admin/',[UserController::class, 'adminPage']);
Route::view('/wel/home/try','welcome');
Route::view('user-form', "userForm");
});

Route::controller(studentController::class)->group(function(){
    Route::get("show" , "show");
    Route::get("add",  "add");
    Route::get("remove", "remove");
    Route::get('about/{name}', 'about');
});

Route::get('about/{name}', [studentController::class, 'about']);

Route::get("crud", [crudController::class, 'crud']);
Route::get('stud', [StudentsControl::class, 'students']);

