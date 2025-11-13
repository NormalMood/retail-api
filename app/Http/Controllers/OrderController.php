<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class OrderController extends Controller
{
    public function __construct(protected OrderService $orderService) {}

    public function index(OrderRequest $request): AnonymousResourceCollection
    {
        return $this->orderService->getAll(
            request('dateFrom'),
            request('dateTo'),
            request('limit')
        );
    }
}
