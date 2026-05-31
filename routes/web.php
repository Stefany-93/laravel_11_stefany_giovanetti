<?php

use App\Http\Controllers\SandwichController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SubmitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');

Route::post('/contattaci/submit', [SubmitController::class, 'submit'])->name('contact.submit');

Route::get('/thank-you', [SubmitController::class, 'thankYou'])->name('thankYou.page');

Route::get('/sandwich/index', [SandwichController::class, 'index'])->name('sandwich.index');

Route::get('/sandwich/show/{sandwich}', [SandwichController::class, 'show'])->name('sandwich.show');

Route::get('/sandwich/create', [SandwichController::class, 'create'])->name('sandwich.create');

Route::post('/sandwich/create/submit', [SandwichController::class, 'store'])->name('sandwich.submit');

Route::get('/sandwich/edit/{sandwich}', [SandwichController::class, 'edit'])->name('sandwich.edit');

Route::put('/sandwich/update/{sandwich}', [SandwichController::class, 'update'])->name('sandwich.update');

Route::delete('/sandwich/delete/{sandwich}', [SandwichController::class, 'destroy'])->name('sandwich.delete');

Route::get('/user/profile', [SandwichController::class, 'profile'])->name('user.profile');