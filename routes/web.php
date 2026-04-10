<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::get('/', [GreetController::class, 'greet']);
Route::get('/greet', [GreetController::class, 'greet']);

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Tasks resource route
Route::resource('tasks', TaskController::class);
