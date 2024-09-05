<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\posController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('/category', [CategoryController::class,'homeCategory']);
Route::get('/category/food-beverage', [CategoryController::class,'foodCategory']);
Route::get('/category/beauty-health', [CategoryController::class,'beautyCategory']);
Route::get('/category/home-care', [CategoryController::class,'careCategory']);
Route::get('/category/baby-kid', [CategoryController::class,'babyCategory']);

Route::get('/user', [userController::class,'user']);
Route::get('/penjualan', [posController::class,'penjualan']);