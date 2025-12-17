<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


Route::get('/', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/reports', [FrontController::class, 'reports']);
Route::get('/reportMaker', [FrontController::class, 'reportMaker']);
// Route::get('/repodummy', [FrontController::class, 'dummySave']);

// Route::get('/portofolios', [PortofolioController::class, 'index'])->name('portofolios.index');
// Route::get('/portofolios/create', [PortofolioController::class, 'create'])->name('portofolios.create');
// Route::get('/report/store', [FrontController::class, 'store'])->name('report.store');
Route::post('/report/store', [FrontController::class, 'store'])->name('report.store');


// Route::get('/session/set', [SessionController::class, 'index'])->name('session.set');
// Route::get('/session/get', [SessionController::class, 'getSession'])->name('session.get');
// Route::post('/session/set', [SessionController::class, 'storeSession'])->name('session.store');
// Route::post('/session/delete', [SessionController::class, 'deleteSession'])->name('session.delete');


// Route::get('/demo/index', [DemoController::class, 'index']) -> name('demo.index');

// Route::get('/demo/login', [DemoController::class, 'login']) -> name('demo.login');
// Route::post('/demo/login', [DemoController::class, 'auth']) -> name('demo.login.post');
// Route::post('/demo/logout', [DemoController::class, 'logout']) -> name('demo.logout');

// Route::middleware([CustomMiddleware::class]) -> group(function(){
//     Route::get('/demo/restricted-access', [DemoController::class, 'restrictedAccess']) -> name('demo.restricted-access') -> middleware(CustomMiddleware::class);
//     Route::get('/demo/profile', [DemoController::class, 'profile']) -> name('demo.profile');
//     Route::get('/demo/dashboard', [DemoController::class, 'dashboard']) -> name('demo.dashboard');
// });
