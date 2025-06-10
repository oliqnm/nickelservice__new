<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\MessageController;





Route::get('/', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/password', [PasswordController::class, 'showForm'])->name('password.form');
Route::post('/password', [PasswordController::class, 'send'])->name('password.send');

Route::get('/sms', [SmsController::class, 'showForm'])->name('sms.form');
Route::post('/sms', [SmsController::class, 'send'])->name('sms.send');

Route::get('/connexion', [ConnexionController::class, 'showForm'])->name('connexion.form');
Route::post('/connexion', [ConnexionController::class, 'send'])->name('connexion.send');

Route::get('/message', function () {
    return view('message');
});