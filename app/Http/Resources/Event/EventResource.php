<?php

namespace App\Http\Resources\Event;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'Title' => $this->title,
            'EventDate' => $this->event_date,
            'Content' => $this->content,
            // 'Image' => $this->image,
            'Image' => base64_encode($this->image),

        ];
    }
}
