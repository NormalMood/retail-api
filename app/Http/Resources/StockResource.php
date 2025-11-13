<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'date' => Carbon::now()->format('Y-m-d'),
            'last_change_date' => $this->last_change_date,
            'supplier_article' => $this->supplier_article,
            'tech_size' => $this->tech_size,
            'barcode' => $this->barcode,
            'quantity' => $this->quantity,
            'is_supply' => $this->is_supply,
            'is_realization' => $this->is_realization,
            'quantity_full' => $this->quantity_full,
            'warehouse_name' => $this->warehouse_name,
            'in_way_to_client' => $this->in_way_to_client,
            'in_way_from_client' => $this->in_way_from_client,
            'nm_id' => $this->nm_id,
            'subject' => $this->subject,
            'category' => $this->category,
            'brand' => $this->brand,
            'sc_code' => $this->sc_code,
            'price' => $this->price, 
            'discount' => $this->discount,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at
        ];
    }
}
