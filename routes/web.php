<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware( 'auth')->group(function() {
//    Rotas administrador
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
    ], function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
    });

    //Rotas resource para os CRUD
    // Route::resources([
    //     'customers' => CustomerController::class
    // ]);



});

//Auth::routes();

Route::group([
    'middleware' => 'guest',
    'prefix' => 'login',
], function() {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('login');
});
