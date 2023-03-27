<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomaineController;
use App\Http\Controllers\PrestationController;
use App\Http\Controllers\PolitiqueDeConfidentialiteController;
use App\Http\Controllers\ProtectionDesDonneesController;
use App\Http\Controllers\DeclarationDeConformiteController;

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

    Route::get('/About', [AboutController::class, 'index'])->name('about');

    Route::get('/Service', [ServiceController::class, 'index'])->name('service');

    Route::get('/Contact', [ContactController::class, 'index'])->name('contact');

    Route::get('/Domaine', [DomaineController::class, 'index'])->name('domaine');

    Route::get('/Prestation', [PrestationController::class, 'index'])->name('prestation');

    Route::get('/politique-de-confidentialité', [PolitiqueDeConfidentialiteController::class, 'index'])->name('politique-de-confidentialite');

    Route::get('/protection-des-donneés', [ProtectionDesDonneesController::class, 'index'])->name('protection-des-donnees');

    Route::get('/declaration-de-conformité', [DeclarationDeConformiteController::class, 'index'])->name('declaration-de-conformite');

    Route::post('/recherche', [WelcomeController::class, 'index'])->name('recherche');
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
