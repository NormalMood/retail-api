<?php

namespace App\Services;

use App\Constants\AppConstants;
use App\Http\Resources\OrderResource;
use App\Models\Order;

class OrderService
{
    public function getAll(string $dateFrom, string $dateTo, ?int $limit)
    {
        $orders = Order::query()
            ->whereBetween('date', [$dateFrom, $dateTo])
            ->paginate($limit ?? AppConstants::DEFAULT_LIMIT);
        return OrderResource::collection($orders);
    }
}