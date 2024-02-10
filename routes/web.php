<?php

    use App\Http\Controllers\AuctionController;
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

    Route::get('create/auction/step1', [AuctionController::class, 'viewCreateAuctionFirstStep'])->name('createFirstStep');
    Route::get('create/auction/step2', [AuctionController::class, 'viewCreateAuctionStep'])->name('createSecondStep');
    Route::get('create/auction/step3', [AuctionController::class, 'viewCreateAuctionThirdStep'])->name('createThirdStep');


    Route::get('home', function (){
        return view('pages.main');
    })->name('createThirdStep');
