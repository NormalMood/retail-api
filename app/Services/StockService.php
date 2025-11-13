<?php

namespace App\Services;

use App\Http\Resources\StockResource;
use App\Models\Stock;

class StockService
{
    public function getAll(?int $limit)
    {
        $stocks = Stock::query()
            ->paginate($limit ?? 500);
        return StockResource::collection($stocks);
    }
}