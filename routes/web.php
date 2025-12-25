<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Artisan;

// Public routes (no authentication needed)
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/partners', [WebsiteController::class, 'sponsers'])->name('sponsers');
Route::post('/sponser-submit', [WebsiteController::class, 'sponsersSubmit'])->name('sponser_post');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/contact', [WebsiteController::class, 'contactSubmit'])->name('contact_post');
Route::get('/query-detail/{question}', [WebsiteController::class, 'query'])->name('query_detail');
Route::post('/query', [WebsiteController::class, 'querySubmit'])->name('query');
Route::get('/term-and-condition', [WebsiteController::class, 'terms'])->name('terms');
Route::get('/error', [WebsiteController::class, 'error'])->name('error');
Route::get('/privacy-policy', [WebsiteController::class, 'privacy'])->name('privacy');
Route::get('/advertising', [WebsiteController::class, 'advertising'])->name('advertising');
Route::get('/my-questions', [WebsiteController::class, 'myQuestions'])->name('myquestions');
Route::get('/sugested-article', [WebsiteController::class, 'sugestedArticle'])->name('suggested_query');
Route::get('/registration', [RegistrationController::class, 'signup'])->name('signup');
Route::post('/registration', [RegistrationController::class, 'registerSubmit'])->name('register');
Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::post('/query-processing', [WebsiteController::class, 'queryProcessing'])->name('queryProcessing');

Route::post('/login', [RegistrationController::class, 'loginSubmit'])->name('login');
// Clear cache route (no authentication needed)
Route::get('/clear-all', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache Cleared!";
})->name('cache.clear');
Route::get('/migrate', function () {
    Artisan::call('migrate');
    return response()->json(['message' => 'Migrations have been run successfully.']);
});
// Protected routes (authentication required)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/banners', [DashboardController::class, 'banners'])->name('banners');
    Route::get('/users', [DashboardController::class, 'users'])->name('users');
    Route::post('/post-banners', [DashboardController::class, 'postBanners'])->name('post_banners');
    Route::get('/partners-contact', [DashboardController::class, 'sponsersContact'])->name('sponsers_contact');
    Route::get('/user-contact', [DashboardController::class, 'usersContact'])->name('users_contact');
    Route::get('/delete-contact/{id}', [DashboardController::class, 'deleteContact'])->name('delete_contact');
    Route::get('/delete-sponser-contact/{id}', [DashboardController::class, 'deleteSponserContact'])->name('delete_sponser_contact');
    Route::get('/download-csv', [DashboardController::class, 'downloadCsv'])->name('download.csv');

});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/')->with('message', 'Successfully logged out!')->with('type', 'success');
})->name('logout');
