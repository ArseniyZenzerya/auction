<?php

    use App\Http\Controllers\AuctionController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\ChatController;
    use Illuminate\Support\Facades\Route;


    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');

    Route::post('api/login', [AuthController::class, 'login'])->name('api.login');
    Route::post('api/register', [AuthController::class, 'register'])->name('api.register');
    Route::get('/product/{auction:id}', [AuctionController::class, 'getProduct'])->name('product');
    Route::get('/list/bid/{auction:id}', [AuctionController::class, 'listBid'])->name('listBid');
    Route::get('/', [AuctionController::class, 'getAllNotExpired'])->name('index');

    Route::middleware(['auth'])->group(function () {
        Route::get('api/logout', [AuthController::class, 'logout'])->name('api.logout');


        Route::get('create/auction/step1', [AuctionController::class, 'viewCreateAuctionFirstStep'])->name(
            'viewCreateFirstStep'
        );
        Route::get('create/auction/step2', [AuctionController::class, 'viewCreateAuctionSecondStep'])->name(
            'viewCreateSecondStep'
        );
        Route::get('create/auction/step3', [AuctionController::class, 'viewCreateAuctionThirdStep'])->name(
            'viewCreateThirdStep'
        );

        Route::post('api/create/auction/step1', [AuctionController::class, 'createAuctionFirstStep'])->name(
            'createFirstStep'
        );
        Route::post('api/create/auction/step2', [AuctionController::class, 'createAuctionSecondStep'])->name(
            'createSecondStep'
        );
        Route::post('api/create/auction/step3', [AuctionController::class, 'createAuctionThirdStep'])->name(
            'createThirdStep'
        );


        Route::post('/add/bid/{auction:id}', [AuctionController::class, 'addBid'])->name('addBid');

        Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
        Route::post('/chat/{auction:id}', [ChatController::class, 'store'])->name('chat.store');

        Route::middleware('auction.owner')->group(function () {
            Route::get('edit/{auction:id}', [AuctionController::class, 'viewEditAuction'])->name('view.edit.auction');
            Route::put('api/edit/{auction:id}', [AuctionController::class, 'updateAuction'])->name('edit.auction');
        });
    });
