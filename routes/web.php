<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/basket', function () {
    return view('basket');
});

Route::get('/checkout', function () {
    return view('checkout');
});


Route::controller(ItemController::class)->group(function () {
    Route::get('/items','index');
    Route::get('/items/{item}','show');
});

Route::controller(BookingController::class)->group(function () {
    Route::get('/bookings','index');
    Route::get('/bookings/{booking}','show');
});

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::post('/basketadd', [ItemController::class, 'add'])->name('AddToBasket');



Route::get('/basket', [BasketController::class, 'view'])->name('basket.view');
Route::post('/basket/clear', [BasketController::class, 'clear'])->name('basket.clear');

