<?php

use App\Http\Controllers\User2Controller;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('profile', [User2Controller::class, 'profile']);

// CRUD users

Route::apiResource('users', UserController::class);// ->only('show', 'index');
