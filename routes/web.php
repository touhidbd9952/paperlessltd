<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/services', [\App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/feature', [\App\Http\Controllers\HomeController::class, 'feature'])->name('feature');
Route::get('/pricing', [\App\Http\Controllers\HomeController::class, 'pricing'])->name('pricing');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/policy', [\App\Http\Controllers\HomeController::class, 'policy'])->name('policy');
Route::get('/terms-and-conditions', [\App\Http\Controllers\HomeController::class, 'termsAConditions'])->name('termsAConditions');
Route::get('/return-and-refund-policy', [\App\Http\Controllers\HomeController::class, 'returnAndRefundPolicy'])->name('returnAndRefundPolicy');
