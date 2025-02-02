<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CharacteristicsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'price' => $this->price,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'sqft' => $this->sqft,
            'price_sqft' => $this->price_sqft,
            'property_type' => $this->property_type,
            'date_available' => $this->date_available,
            'laundry' => $this->laundry,
            'cooling' => $this->cooling,
            'heating' => $this->heating,
            'parking_area' => $this->parking_area,
            'status' => $this->status
        ];
    }
}
