<?php

namespace App\Http\Resources\Testimonial;

use Illuminate\Http\Resources\Json\JsonResource;


class TestimonialCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Id' => $this->id,
            'Name' => $this->name,
            'Content' => $this->content,
            'Rating' => $this->rating,
            'Image' => base64_encode($this->image)

        ];
    }
}