<?php

use App\Http\Controllers\IncomeController;
use App\Http\Middleware\CheckSecretToken;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => CheckSecretToken::class], function () {
    Route::get('/incomes', [IncomeController::class, 'index']);
});