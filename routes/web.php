<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/hello', function () {return "Hello, World!";});
Route::get('/user/{id}', function ($id) {return "User ID: " . $id;});
Route::get('/username/{name?}', function ($name = "Guest") {return "Hello, " . $name;});
Route::prefix('dashboard')->group(function () {
    Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
    Route::get('/user', [AuthController::class, 'user'])->name('user');
    });

    Route::get('/data', [AuthController::class, 'form'])->name('test');
Route::post('/postdata', [AuthController::class, 'test']);
Route::put('/putdata', function () { return "PUT Request"; });
Route::delete('/deletedata', function () { return "DELETE Request"; });
Route::patch('/patchdata', function () { return "PATCH Request"; });
Route::get('/test', function () { return view ('login_bootstrap'); });

