<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/our-approach', 'approach')->name('approach');
    Route::get('/consulting', 'consulting')->name('consulting');
});

Route::controller(ProductsController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });

Route::controller(ServicesController::class)
    ->prefix('services')
    ->name('services.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/bfsi-kyc', 'bfsiKyc')->name('bfsi.kyc');
        Route::get('/background-verification', 'backgroundVerification')->name('background.verification');
        Route::get('/bfsi-kyc', 'bfsiKyc')->name('bfsi.kyc');
    });


