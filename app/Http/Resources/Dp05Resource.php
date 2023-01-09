<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dp05Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'nationality'=>$this->whenNotNull($this->countryName->name),
            'nationality_id' => $this->dp06->dp06002,
            'possport_id' => $this->dp07->dp07002,
        ];
    }
}
