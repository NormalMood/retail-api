<?php

namespace App\Services;

use App\Constants\AppConstants;
use App\Http\Resources\IncomeResource;
use App\Models\Income;

class IncomeService
{
    public function getAll(string $dateFrom, string $dateTo, ?int $limit)
    {
        $incomes = Income::query()
            ->whereBetween('date', [$dateFrom, $dateTo])
            ->paginate($limit ?? AppConstants::DEFAULT_LIMIT);
        return IncomeResource::collection($incomes);
    }
}