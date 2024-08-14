<?php

use App\Http\Controllers\AddressApiController;
use App\Http\Controllers\ProductApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Product
Route::get('/products',[ProductApiController::class,'index']);
Route::post('/products',[ProductApiController::class,'store']);
Route::get('/products/{id}',[ProductApiController::class,'show']);
Route::put('/products/{id}',[ProductApiController::class,'update']);
Route::delete('/products/{id}',[ProductApiController::class,'destroy']);

//Address

Route::get('/address', [AddressApiController::class, 'index']);
Route::post('/address', [AddressApiController::class, 'store']);
Route::get('/address/{id}', [AddressApiController::class, 'show']);
Route::put('/address/{id}', [AddressApiController::class, 'update']);
Route::delete('/address/{id}', [AddressApiController::class, 'destroy']);