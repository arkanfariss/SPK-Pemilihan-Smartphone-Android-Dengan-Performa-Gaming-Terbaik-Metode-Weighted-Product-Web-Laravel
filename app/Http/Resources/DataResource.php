<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'smartphone' => $this->smartphone,
            'cpu' => $this->cpu,
            'ram' => $this->ram,
            'storage' => $this->storage,
            'layar' => $this->layar,
            'baterai' => $this->baterai,
            'harga' => $this->harga,
            'image' => $this->image,
            // 'created_at' => $this->created_at,
            'created_at' => date('d-m-Y', strtotime($this->created_at)),
            // 'updated_at' => date('d-m-Y', strtotime($this->updated_at)),
        ];
    }
}