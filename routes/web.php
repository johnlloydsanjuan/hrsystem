<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/getMunicipality/{province}', [LoginController::class, 'getMunicipality'])->name('getmunicipality');

//PUBLIC

Route::match(['get', 'post'], '/login', [LoginController::class, 'loginHandle'])->name('login');
Route::match(['get', 'post'], '/register', [LoginController::class, 'registerHandle'])->name('register');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('master')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboardIndex'])->name('ma.dashboardIndex');
    //MASTER ADMIN === EMPLOYEES
    Route::get('/employees', [AdminController::class, 'employeesIndex'])->name('ma.employeesIndex');
    //MASTER ADMIN === POSITIONS
    Route::get('/positions', [AdminController::class, 'positionsIndex'])->name('ma.positionsIndex');
    //MASTER ADMIN === LEAVES
    Route::get('/leaves', [AdminController::class, 'leavesIndex'])->name('ma.leavesIndex');
    //MASTER ADMIN === DTR
    Route::get('/dtr', [AdminController::class, 'dtrIndex'])->name('ma.dtrIndex');
    //MASTER ADMIN === PAYROLL
    Route::get('/payroll', [AdminController::class, 'payrollIndex'])->name('ma.payrollIndex');
    //MASTER ADMIN === LOGS
    Route::get('/logs', [AdminController::class, 'logsIndex'])->name('ma.logsIndex');
    //MASTER ADMIN === PROFILE
    Route::get('/profile', [AdminController::class, 'profileIndex'])->name('ma.profileIndex');
    //MASTER ADMIN === NOTIFICATIONS
    Route::get('/notifications', [AdminController::class, 'notificationsIndex'])->name('ma.notificationsIndex');
    //MASTER ADMIN === MESSAGES
    Route::get('/messages', [AdminController::class, 'messagesIndex'])->name('ma.messagesIndex');
});
//MASTER ADMIN
