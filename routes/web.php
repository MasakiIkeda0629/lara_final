<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('layouts.profile');
});

Route::get('/confirm', function () {
    return view('contacts.confirm');
});

Route::post('/confirm',
[ContactController::class,'index'])->name('index');

Route::get('/list', 
[ContactController::class, 'list'])->name('list');

Route::get('/complete', function () {
    return view('contacts.complete');
});

Route::post('/complete',
[ContactController::class,'store'])->name('store');