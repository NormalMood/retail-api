<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Services\StockService;

class StockController extends Controller
{
    public function __construct(protected StockService $stockService){}

    public function index(StockRequest $request)
    {
        return $this->stockService->getAll(request('limit'));
    }
}
