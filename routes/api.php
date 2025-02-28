<?php

use App\Http\Controllers\Booking\DeleteController;
use App\Http\Controllers\Booking\StoreController as BookingStoreController;
use App\Http\Controllers\Resource\IndexController;
use App\Http\Controllers\Resource\ShowController;
use App\Http\Controllers\Resource\StoreController;
use Illuminate\Support\Facades\Route;

Route::GROUP(['namespace' => 'App\Http\Controllers\Resource', 'prefix' => 'resources'], function(){
    Route::GET('/', [IndexController::class, '__invoke']);
    Route::POST('/', [StoreController::class, '__invoke']);
    Route::GET('/{id}/bookings', [ShowController::class, '__invoke']);
});

Route::GROUP(['namespace' => 'App\Http\Controllers\Booking', 'prefix' => 'bookings'], function(){
    Route::POST('/', [BookingStoreController::class, '__invoke']);
    Route::DELETE('/{id}', [DeleteController::class, '__invoke']);
});

