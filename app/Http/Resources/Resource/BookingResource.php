<?php

namespace App\Http\Resources\Resource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'resource_id' => $this->resource_id,
            'user_id' => $this->user_id,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
        ];
    }
}
