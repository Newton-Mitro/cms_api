<?php

namespace App\Http\Resources\Testimonial;

use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource {
    
    public function toArray($request) {
        return [
            'Name' => $this->name,
            'Content' => $this->content,
            'Rating' => $this->rating,
            'Image' => base64_encode($this->image)
        ];
    }
}
