<?php

use App\Http\Controllers\CreaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SubmitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');

Route::post('/contattaci/submit', [SubmitController::class, 'submit'])->name('contact.submit');

Route::get('/thank-you', [SubmitController::class, 'thankYou'])->name('thankYou.page');

Route::get('/index', [MenuController::class, 'panini'])->name('panini.index');

Route::get('/panini/show/{id}', [MenuController::class, 'show'])->name('panini.show');

Route::get('/create', [CreaController::class, 'crea'])->name('crea');

Route::post('/create', [CreaController::class, 'creaPanino'])->name('crea.panino');

Route::get('/store', [CreaController::class, 'store'])->name('panini.store');
