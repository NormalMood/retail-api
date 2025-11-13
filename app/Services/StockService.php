<?php

namespace App\Services;

use App\Constants\AppConstants;
use App\Http\Resources\StockResource;
use App\Models\Stock;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class StockService
{
    public function getAll(?int $limit): AnonymousResourceCollection
    {
        $stocks = Stock::query()
            ->paginate($limit ?? AppConstants::DEFAULT_LIMIT);
        return StockResource::collection($stocks);
    }
}