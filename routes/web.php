<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'loginIndex'])->name('loginIndex');
Route::get('/loginprocess', [LoginController::class, 'loginProcess'])->name('loginProcess');
