<?php

namespace App\Services;

use App\Constants\AppConstants;
use App\Http\Resources\SaleResource;
use App\Models\Sale;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SaleService
{
    public function getAll(string $dateFrom, string $dateTo, ?int $limit): AnonymousResourceCollection
    {
        $sales = Sale::query()
            ->whereBetween('date', [$dateFrom, $dateTo])
            ->paginate($limit ?? AppConstants::DEFAULT_LIMIT);
        return SaleResource::collection($sales);
    }
}