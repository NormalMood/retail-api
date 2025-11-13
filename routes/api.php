<?php

use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Route;

Route::get('/incomes', [IncomeController::class, 'index']);