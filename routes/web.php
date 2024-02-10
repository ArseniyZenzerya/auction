<?php

    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('pages.index');
    })->name('index');

    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');

    Route::post('api/login', [AuthController::class, 'login'])->name('api.login');
    Route::post('api/register', [AuthController::class, 'register'])->name('api.register');

    Route::get('api/logout', [AuthController::class, 'logout'])->name('api.logout');
