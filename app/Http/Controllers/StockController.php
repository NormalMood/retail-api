<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Services\StockService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class StockController extends Controller
{
    public function __construct(protected StockService $stockService) {}

    public function index(StockRequest $request): AnonymousResourceCollection
    {
        return $this->stockService->getAll(request('limit'));
    }
}
