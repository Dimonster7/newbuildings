<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdvertisementResource extends JsonResource
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
            'price' => $this->price,
            'squaretotal' => $this->squaretotal,
            'squarelive' => $this->squarelive,
            'rajon' => $this->rajon,
            'GK' => $this->GK,
            'street' => $this->street,
            'numberhouse' => $this->numberhouse,
            'yearhouse' => $this->yearhouse,
            'typehouse' => $this->typehouse,
            'levelhouse' => $this->levelhouse,
            'level' => $this->level,
            'countroom' => $this->countroom,
            'otdelka' => $this->otdelka,
            'nalbl' => $this->nalbl,
            'builder' => new BuilderResource($this->builder),
            'photo' => $this->photo
        ];
    }
}
