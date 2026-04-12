<?php

use App\Http\Controllers\CreaController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SubmitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');

Route::post('/contattaci/submit', [SubmitController::class, 'submit'])->name('contact.submit');

Route::get('/thank-you', [SubmitController::class, 'thankYou'])->name('thankYou.page');

Route::get('/panini/index', [PublicController::class, 'index'])->name('panini.index');

Route::get('/panini/show/{panino}', [PublicController::class, 'show'])->name('panini.show');

Route::get('/panini/create', [CreaController::class, 'create'])->name('panini.create');

Route::post('/panini/create/submit', [CreaController::class, 'store'])->name('panini.submit');

Route::get('/store', [CreaController::class, 'store'])->name('panini.store');

