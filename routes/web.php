<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MenuController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');

Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');

Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankYou.page');

Route::get('/panini', [MenuController::class, 'panini'])->name('menu');

Route::get('/panini/dettaglio/{id}', [MenuController::class, 'dettaglio'])->name('sandwich.detail');

Route::get('/crea', [PublicController::class, 'crea'])->name('crea');

Route::post('/crea', [PublicController::class, 'creaPanino'])->name('crea.panino');

Route::get('/panini/index', [PublicController::class, 'index'])->name('panini.index');