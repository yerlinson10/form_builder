<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\FormResponsesController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('forms', FormsController::class);
    Route::post('/forms/{form}/submit', [FormsController::class, 'submitForm'])->name('forms.submit');
    Route::resource('answers', FormResponsesController::class);
});
