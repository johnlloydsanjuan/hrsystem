<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'loginIndex'])->name('loginIndex');
Route::get('/loginprocess', [LoginController::class, 'loginProcess'])->name('loginProcess');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//MASTER ADMIN
Route::get('/master/dashboard', [AdminController::class, 'dashboardIndex'])->name('ma.dashboardIndex');
//MASTER ADMIN === EMPLOYEES
Route::get('/master/employees', [AdminController::class, 'employeesIndex'])->name('ma.employeesIndex');
//MASTER ADMIN === POSITIONS
Route::get('/master/positions', [AdminController::class, 'positionsIndex'])->name('ma.positionsIndex');
//MASTER ADMIN === LEAVES
Route::get('/master/leaves', [AdminController::class, 'leavesIndex'])->name('ma.leavesIndex');
//MASTER ADMIN === DTR
Route::get('/master/dtr', [AdminController::class, 'dtrIndex'])->name('ma.dtrIndex');
//MASTER ADMIN === PAYROLL
Route::get('/master/payroll', [AdminController::class, 'payrollIndex'])->name('ma.payrollIndex');
//MASTER ADMIN === LOGS
Route::get('/master/logs', [AdminController::class, 'logsIndex'])->name('ma.logsIndex');
//MASTER ADMIN === PROFILE
Route::get('/master/profile', [AdminController::class, 'profileIndex'])->name('ma.profileIndex');
//MASTER ADMIN === NOTIFICATIONS
Route::get('/master/notifications', [AdminController::class, 'notificationsIndex'])->name('ma.notificationsIndex');
//MASTER ADMIN === MESSAGES
Route::get('/master/messages', [AdminController::class, 'messagesIndex'])->name('ma.messagesIndex');

