<?php

namespace App\Services;

use App\Http\Resources\IncomeResource;
use App\Models\Income;

class IncomeService
{
    public function getAll(string $dateFrom, string $dateTo, ?int $limit)
    {
        $incomes = Income::query()
            ->whereBetween('date', [$dateFrom, $dateTo])
            ->paginate($limit ?? 500);
        return IncomeResource::collection($incomes);
    }
}