<?php

namespace App\Http\Resources;

use App\Models\Broker;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertiesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        $broker = Broker::find($this->broker_id);

        return [
            'id' => (string) $this->id,
            'type' => 'Properties',
            'attributes' => [
                'addresss' => $this->address,
                'listing_type' => $this->listing_type,
                'city' => $this->city,
                'zip_code' => $this->zip_code,
                'description' => $this->description,
                'build_year' => $this->build_year,
                'units' => $this->units,
            ],

            'relationships' => [
                'characteristics' => [
                    new CharacteristicsResource($this->characteristic)
                ],
                'broker' => [
                    'first_name' => $broker->first_name,
                    'last_name' => $broker->last_name,
                    'address' => $broker->address,
                    'phone_number' => $broker->phone_number,
                ]
            ],
        ];

    }

}
