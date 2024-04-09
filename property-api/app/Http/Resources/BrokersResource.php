<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrokersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (string) $this->id,
            'type' => 'Brokers',
            'attributes' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'address' => $this->address,
                'city' => $this->city,
                'zip_code' => $this->zip_code,
                'phone_number' => $this->phone_number,
                'logo_path' => $this->logo_path
            ],

        ];
    }
}
