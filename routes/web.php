<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userControler;

// Route::get('/', function () {
//     return view('home');
// });


Route::view('/home',"home");
Route::view('/dyna1/{name}', "userName");
Route::get('user',[UserController::class, 'getusers']);
Route::get("see", [UserController::class, 'seeusers']);
Route::get('dyna/{name}',[UserController::class, 'dynaUsers']);
Route::get('admin/',[UserController::class, 'adminPage']);
Route::view('/wel','welcome');
Route::view('user-form', "userForm");


Route::post('addUser', [userControler::class, 'userForm']);