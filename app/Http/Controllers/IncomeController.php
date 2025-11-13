<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomeRequest;
use App\Services\IncomeService;

class IncomeController extends Controller
{
    public function __construct(protected IncomeService $incomeService) {
    }

    public function index(IncomeRequest $request)
    {
        return $this->incomeService->getAll(
            request('dateFrom'), 
            request('dateTo'),
            request('limit')
        );
    }
}
