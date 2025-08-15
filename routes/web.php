<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get(
        '/',
        [DashboardController::class, 'index']
    )->name('dashboard');


    Route::resource('/hotel', HotelController::class);
    Route::resource('/booking', BookingController::class);
    Route::resource('/room', RoomController::class);
    Route::resource('/guest', GuestController::class);
    Route::resource('/client', ClientsController::class);
    Route::resource('/room-type', RoomTypeController::class);
    
    Route::resource('/product', ProductsController::class);
    Route::resource('/sales', SalesController::class);
    Route::resource('/media', MediaController::class);
    
    Route::resource('/setting', SettingsController::class);

    // 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get("/", [FrontendController::class, 'index'])->name('frontend.index');
Route::get("/p/{pagename}", [FrontendController::class, 'index'])->name('frontend.page');


require __DIR__.'/auth.php';
