<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('category', \App\Http\Controllers\Api\CategoryController::class);
Route::apiResource('post', \App\Http\Controllers\Api\PostController::class);
