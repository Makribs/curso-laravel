<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/read', [EventController::class, 'read']);
Route::get('/events/update', [EventController::class, 'update']);
Route::get('/events/delete', [EventController::class, 'delete']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::get('/products/read', [ProductController::class, 'read']);
Route::get('/products/update', [ProductController::class, 'update']);
Route::get('/products/delete', [ProductController::class, 'delete']);

Route::get('/contacts', [ContactController::class, 'index']);