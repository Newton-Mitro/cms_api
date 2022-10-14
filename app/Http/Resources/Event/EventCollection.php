<?php

namespace App\Http\Resources\Event;

use Illuminate\Http\Resources\Json\JsonResource;

class EventCollection extends JsonResource
{

    public function toArray($request)
    {
        return [
            'Id' => $this->id,
            'Title' => $this->title,
            'EventDate' => $this->event_date,
            'Content' => $this->content,
            // 'Image' => $this->image,
            'Image' => base64_encode($this->image),

        ];
    }
}
