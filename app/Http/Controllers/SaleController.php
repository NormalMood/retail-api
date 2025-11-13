<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleRequest;
use App\Services\SaleService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SaleController extends Controller
{
    public function __construct(protected SaleService $saleService) {}

    public function index(SaleRequest $request): AnonymousResourceCollection
    {
        return $this->saleService->getAll(
            request('dateFrom'),
            request('dateTo'),
            request('limit')
        );
    }
}
