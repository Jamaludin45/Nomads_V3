<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail', [DetailController::class, 'index'])->name('detail');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout-success');

//Route::resource('travel-package', TravelPackageController::class);


Route::prefix('admin')->middleware(['auth','admin'])->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        //Route::get('travel-package',[TravelPackageController::class, 'index']);
        Route::resource('travel-package', TravelPackageController::class);      
    
             
              
               
    });

Auth::routes(['verify' => true]);