<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'home']);
Route::get('/home', [WebController::class, 'home']);
Route::get('/services', [WebController::class, 'services']);
Route::get('/about', [WebController::class, 'about']);
Route::get('/catalog', [BookController::class, 'bookCatalog']);
Route::get('/publishing', [BookController::class, 'bookPublishing']);