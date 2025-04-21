<?php

use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return "Cache cleared!";
});

Route::get('/',[LoginController::class,'index'])->name('login-page');
Route::post('login',[LoginController::class,'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get("seller-driver-details",[SellerController::class,'index'])->name('users.index');
    Route::get("show-users",[SellerController::class,'showData'])->name('showdata');
    Route::get('register',[LoginController::class,'register'])->name('register');
});


Route::post('password',[LoginController::class,'password'])->name('password.request');