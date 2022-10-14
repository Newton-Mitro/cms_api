<?php

namespace App\Http\Resources\Testimonial;

use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource
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
            'Name' => $this->name,
            'Content' => $this->content,
            'Rating' => $this->rating,
            'Image' => base64_encode($this->image)

        ];
    }
}
