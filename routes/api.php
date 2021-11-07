<?php

use App\Http\Controllers\Api\ApiCategoryController;
use App\Http\Controllers\Api\ApiProductController;
use App\Http\Controllers\Api\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::apiResource('categories', ApiCategoryController::class);
Route::apiResource('products', ApiProductController::class);
Route::apiResource('users', ApiUserController::class);
