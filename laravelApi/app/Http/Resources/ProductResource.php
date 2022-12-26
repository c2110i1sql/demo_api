<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'image' => url('uploads').'/'.$this->image,
            'content' => $this->content,
            'price' => $this->price,
            'sale_price' => $this->sale_price,
            'status' => $this->status == 0 ? 'Tạm ẩn' : 'Hiển thị',
            'cat' => $this->cat
        ];
    }
}
