<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sponsers', [HomeController::class, 'sponsers'])->name('sponsers');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/query', [HomeController::class, 'query'])->name('query');
Route::get('/signup', [RegistrationController::class, 'signup'])->name('signup');
Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::get('/term-and-condition', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [HomeController::class, 'cookies'])->name('cookies');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashbaord');
Route::get('/clear-all', function () {
    Artisan::call('cache:clear');  // Clears the application cache
    Artisan::call('route:clear');  // Clears the route cache (optional)
    Artisan::call('config:clear'); // Clears the config cache (optional)
    Artisan::call('view:clear');   // Clears the view cache (optional)

    return "Cache Cleared!";
})->name('cache.clear');
