<?php

use App\Http\Controllers\{UserController, WalletController};
use Illuminate\Support\Facades\Route;

Route::post('user', UserController::class.'@store')->name("user.create");

Route::group(['prefix' => 'wallet'], function () {
    Route::post('/deposit', WalletController::class.'@deposit')->name("wallet.deposit");
    Route::post('/transfer', WalletController::class.'@transfer')->name("wallet.transfer");
});
