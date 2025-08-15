<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get(
        '/',
        [DashboardController::class, 'index']
    )->name('dashboard');


    
    Route::resource('/setting', SettingsController::class);

    // 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get("/", [FrontendController::class, 'index'])->name('frontend.index');
Route::get("/p/{pagename}", [FrontendController::class, 'index'])->name('frontend.page');


require __DIR__.'/auth.php';
