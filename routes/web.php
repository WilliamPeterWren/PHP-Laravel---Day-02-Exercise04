<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostParameterController;


Route::get('/', function () {
    return view('home');
});

Route::get('/index', [PostController::class, 'index']);
Route::get('/post', [PostController::class, 'post']);
Route::get('/post/show', [PostController::class, 'show']);
Route::get('/post/edit', [PostController::class, 'edit'])->middleware('checkkk');
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/{id}', [PostParameterController::class, 'post']);
Route::get('/post/edit/{id}', [PostParameterController::class, 'edit']);