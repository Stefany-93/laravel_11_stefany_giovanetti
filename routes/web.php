<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');

Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');

Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankYou.page');