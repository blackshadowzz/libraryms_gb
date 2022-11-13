<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('home')
        ->middleware('auth');
Route::middleware('auth')->group(function(){
    Route::resource('authors', AuthorController::class);
    Route::resource('staffs', StaffController::class);
    Route::resource('positions', PositionController::class);
    Route::resource('racks', RackController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('books', BookController::class);
});