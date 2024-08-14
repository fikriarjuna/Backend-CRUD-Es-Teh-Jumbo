<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Product
Route::get('/products',[ProductController::class,'index']);
Route::get('/products/create',[ProductController::class,'create']);
Route::post('/products',[ProductController::class,'store']);
Route::get('/products/{id}/edit',[ProductController::class,'edit']);
Route::put('/products/{id}',[ProductController::class,'update']);
Route::delete('/products/{id}',[ProductController::class,'destroy']);

//Address
Route::get('/address', [AddressController::class, 'index']);
Route::get('/address/create', [AddressController::class, 'create']);
Route::post('/address', [AddressController::class, 'store']);
Route::get('/address/{id}/edit', [AddressController::class, 'edit']);
Route::put('/address/{id}', [AddressController::class, 'update']);
Route::delete('/address/{id}', [AddressController::class, 'destroy']);