<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


Route::get('/', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/reports', [FrontController::class, 'reports'])->name('reports');
Route::get('/reportMaker', [FrontController::class, 'reportMaker'])->name('report.maker');
Route::post('/reportMaker/store', [FrontController::class, 'storeReport'])->name('report.store');

Route::get('/reportManager', [FrontController::class, 'reports'])->name('reportManager');

Route::get('/login', [FrontController::class, 'login']) -> name('login');
Route::post('/login', [FrontController::class, 'auth']) -> name('login.post');
Route::post('/logout', [FrontController::class, 'logout']) -> name('logout');

Route::get('/register', [FrontController::class, 'register'])->name('register');
Route::post('/register/store', [FrontController::class, 'storeRegister'])->name('register.post');

// Route::middleware([CustomMiddleware::class]) -> group(function(){
//     Route::get('/demo/restricted-access', [DemoController::class, 'restrictedAccess']) -> name('demo.restricted-access') -> middleware(CustomMiddleware::class);
//     Route::get('/demo/profile', [DemoController::class, 'profile']) -> name('demo.profile');
//     Route::get('/demo/dashboard', [DemoController::class, 'dashboard']) -> name('demo.dashboard');
// });


