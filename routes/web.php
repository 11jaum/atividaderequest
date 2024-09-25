<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresas/register', function () {
    return view('empresas.register');
});

Route::post('/empresas', [CompanyController::class, 'store'])->name('empresas.store');
