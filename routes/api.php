<?php

use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Http\Middleware\CheckSecretToken;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => CheckSecretToken::class], function () {
    Route::get('/incomes', [IncomeController::class, 'index']);
    Route::get('/stocks', [StockController::class, 'index']);
    Route::get('/orders', [OrderController::class, 'index']);
});