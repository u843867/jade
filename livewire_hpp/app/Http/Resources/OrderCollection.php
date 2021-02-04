<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\OrderTraveler;


class OrderCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'ref' => $this->refId,
            'currency' => $this->TotalCostCurrency,
            'symbol' => $this->TotalCostSymbol,
            'amount' => $this->TotalCostAmount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'travellers' => OrderTraveler::collection($this->travellers),
        ];
    }
}
