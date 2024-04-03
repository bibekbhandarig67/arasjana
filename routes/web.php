<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', [ServiceController::class, 'index'])->name('service.index');
Route::post('/services/create', [ServiceController::class, 'create'])->name('service.create');
// Route::post('/services/store', [ServiceController::class, 'store'])->name('service.store');
// Route::post('/services/edit/', [ServiceController::class, 'edit'])->name('service.edit');