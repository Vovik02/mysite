<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index']);
Route::get('/all', [\App\Http\Controllers\AllController::class, 'all']);
Route::get('/categories', [\App\Http\Controllers\CategoriesController::class, 'showCategory']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact']);
Route::get('/{cat}', [\App\Http\Controllers\FriendController::class, 'getCategory'])->name('getCategory');
Route::get('/{cat}/{friend_id}', [\App\Http\Controllers\FriendController::class, 'getFriend'])->name('getFriends');

