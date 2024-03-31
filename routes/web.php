<?php

use App\Http\Controllers\TopController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SushiArtisanController;
use App\Http\Controllers\SushiArtisanSelectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderConfirmationEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BotManController; //ChatBot


Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', [TopController::class, 'top'])->name('top');

// Route::post('/send', [OrderConfirmationEmailController::class, 'send'])->name('send.order.confirmation');

Route::get('/packages', function () {
    return view('packages');
})->middleware(['auth', 'verified'])->name('packages');

Route::get('/sushi_artisan/{id}', [SushiArtisanController::class, 'show'])->name('sushi_artisan.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');
    Route::get('/packages/{package}', [PackageController::class, 'show'])->name('packages.show');
    Route::get('/package/search', [PackageController::class, 'search'])->name('packages.search');
    Route::get('/package/check', [PackageController::class, 'check'])->name('packages.check');
    // Route::get('reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    // Route::post('reservations/store', [ReservationController::class, 'store'])->name('reservations.store');
    // Route::get('reservations/check', [ReservationController::class, 'check'])->name('reservations.check');
});

// ChatBot
Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');

// 予約情報入力フォーム
Route::get('/contact', [FormController::class, 'index'])->name('contact');
Route::post('/contact/confirm', [FormController::class, 'confirm'])->name('contact.confirm');
Route::get('/contact/confirm', [FormController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/complete', [FormController::class, 'complete'])->name('contact.complete');
Route::get('/contact/complete', [FormController::class, 'complete'])->name('contact.complete');

require __DIR__ . '/auth.php';
