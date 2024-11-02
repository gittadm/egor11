<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagerUserController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('profile', [User2Controller::class, 'profile'])->middleware('auth:sanctum');

// Route::post('register', [UserController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// CRUD users

Route::apiResource('users', UserController::class);// ->only('show', 'index');

Route::get('manager/users/{id}', [ManagerUserController::class, 'show']);
