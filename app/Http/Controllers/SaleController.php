<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleRequest;
use App\Services\SaleService;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function __construct(protected SaleService $saleService) {}

    public function index(SaleRequest $request)
    {
        return $this->saleService->getAll(
            request('dateFrom'),
            request('dateTo'),
            request('limit')
        );
    }
}
