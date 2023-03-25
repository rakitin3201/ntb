<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\LogoutController;

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

Route::middleware(['throttle:60, 1'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

    Route::get('/Acceuil', [WelcomeController::class, 'index'])->name('acceuil');

    Route::get('/About', [WelcomeController::class, 'index'])->name('about');

    Route::get('/Service', [WelcomeController::class, 'index'])->name('service');

    Route::get('/Contact', [WelcomeController::class, 'index'])->name('contact');

    Route::get('/Domaine', [WelcomeController::class, 'index'])->name('domaine');

    Route::get('/Prestation', [WelcomeController::class, 'index'])->name('prestation');

    Route::get('/Confidentialite', [WelcomeController::class, 'index'])->name('confidentialite');

    Route::get('/Protection', [WelcomeController::class, 'index'])->name('protection');

    Route::get('/Conformite', [WelcomeController::class, 'index'])->name('conformite');

    Route::post('/Recherche', [WelcomeController::class, 'index'])->name('search');
});

Auth::routes();

Route::middleware(['throttle:60, 1', 'auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/logout', [LogoutController::class, 'perForm'])->name('logout.perForm');
});

Route::middleware(['throttle:60, 1', 'auth'])->group(function () {
    Route::get('/privates', function () {
        return "Privates routes";
    });
});
