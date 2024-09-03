<?php

use BalogunUsman\Wallet\Controllers\WalletController;

Route::prefix('wallet')->group(function () {
    Route::get('/{userId}/balance', [WalletController::class, 'showBalance']);
    Route::post('/{userId}/add', [WalletController::class, 'addFunds']);
});
