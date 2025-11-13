<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomeRequest;
use App\Services\IncomeService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IncomeController extends Controller
{
    public function __construct(protected IncomeService $incomeService) {}

    public function index(IncomeRequest $request): AnonymousResourceCollection
    {
        return $this->incomeService->getAll(
            request('dateFrom'), 
            request('dateTo'),
            request('limit')
        );
    }
}
