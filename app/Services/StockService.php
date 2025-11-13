<?php

namespace App\Services;

use App\Constants\AppConstants;
use App\Http\Resources\StockResource;
use App\Models\Stock;

class StockService
{
    public function getAll(?int $limit)
    {
        $stocks = Stock::query()
            ->paginate($limit ?? AppConstants::DEFAULT_LIMIT);
        return StockResource::collection($stocks);
    }
}