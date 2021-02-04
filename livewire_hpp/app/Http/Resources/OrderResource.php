<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'refId' => $this->refId,
            'Currency' => $this->TotalCostCurrency,
            'Symbol' => $this->TotalCostSymbol,
            'Amount' => $this->TotalCostAmount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'legs' => OrderJourneyLegResource::collection($this->legs),
            'travellers' => OrderTravelerResource::collection($this->travelers),
            'products' => OrderProductResource::collection($this->products),
        ];
    }
}
