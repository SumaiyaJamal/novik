<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Artisan;

// Public routes (no authentication needed)
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/sponsers', [WebsiteController::class, 'sponsers'])->name('sponsers');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/query', [WebsiteController::class, 'query'])->name('query');
Route::get('/term-and-condition', [WebsiteController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [WebsiteController::class, 'privacy'])->name('privacy');
Route::get('/advertising', [WebsiteController::class, 'advertising'])->name('advertising');
Route::get('/my-questions', [WebsiteController::class, 'myQuestions'])->name('myquestions');
Route::get('/registration', [RegistrationController::class, 'signup'])->name('signup');
Route::post('/registration', [RegistrationController::class, 'registerSubmit'])->name('register');
Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::post('/login', [RegistrationController::class, 'loginSubmit'])->name('login');
// Clear cache route (no authentication needed)
Route::get('/clear-all', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache Cleared!";
})->name('cache.clear');

// Protected routes (authentication required)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/')->with('message', 'Successfully logged out!')->with('type', 'success');
})->name('logout');
