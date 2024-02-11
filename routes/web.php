<?php

    use App\Http\Controllers\AuctionController;
    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('pages.index');
    })->name('123123');

    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');

    Route::post('api/login', [AuthController::class, 'login'])->name('api.login');
    Route::post('api/register', [AuthController::class, 'register'])->name('api.register');

    Route::get('api/logout', [AuthController::class, 'logout'])->name('api.logout');

    Route::get('create/auction/step1', [AuctionController::class, 'viewCreateAuctionFirstStep'])->name('viewCreateFirstStep');
    Route::get('create/auction/step2', [AuctionController::class, 'viewCreateAuctionSecondStep'])->name('viewCreateSecondStep');
    Route::get('create/auction/step3', [AuctionController::class, 'viewCreateAuctionThirdStep'])->name('viewCreateThirdStep');

    Route::post('api/create/auction/step1', [AuctionController::class, 'createAuctionFirstStep'])->name('createFirstStep');
    Route::post('api/create/auction/step2', [AuctionController::class, 'createAuctionSecondStep'])->name('createSecondStep');
    Route::post('api/create/auction/step3', [AuctionController::class, 'createAuctionThirdStep'])->name('createThirdStep');

    Route::get('/product/{auction:id}', [AuctionController::class, 'getProduct'])->name('product');


    Route::get('/', [AuctionController::class, 'getAllNotExpired'])->name('index');
