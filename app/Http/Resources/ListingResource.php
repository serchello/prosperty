<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListingResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'uuid' => $this->uuid,
            'amenities' => $this->amenities,
            'bathrooms' => $this->bathrooms,
            'bedrooms' => $this->bedrooms,
            'description' => $this->description,
            'floor' => $this->floor,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'postal_code' => $this->postal_code,
            'price' => $this->price,
            'size' => $this->size,
            'street' => $this->street,
            'street_number' => $this->street_number,
            'title' => $this->title,
            'type' => [
                'uuid' => $this->type->uuid,
                'name' => $this->type->name,
            ],

            /*===============================  Timestamps  ===============================*/
            'available_from' => $this->available_from->toIso8601String(),
            'created_at' => $this->created_at->toIso8601String(),
            'updated_at' => $this->updated_at->toIso8601String(),

        ];
    }
}