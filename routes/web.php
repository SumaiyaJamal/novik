<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Artisan;
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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sponsers', [HomeController::class, 'sponsers'])->name('sponsers');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashbaord');
Route::get('/clear-all', function () {
    Artisan::call('cache:clear');  // Clears the application cache
    Artisan::call('route:clear');  // Clears the route cache (optional)
    Artisan::call('config:clear'); // Clears the config cache (optional)
    Artisan::call('view:clear');   // Clears the view cache (optional)

    return "Cache Cleared!";
})->name('cache.clear');
