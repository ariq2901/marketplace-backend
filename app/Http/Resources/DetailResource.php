<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => ImageResource::collection($this->images),
            'rating' => $this->rating,
            'sold' => $this->sold,
            'harga' => $this->harga,
            'jumlah' => $this->jumlah,
            'description' => $this->description,
        ];
    }
}
