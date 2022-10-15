<?php

namespace App\Http\Resources\Event;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource {

    public function toArray($request) {
        return [
            'id' => $this->id,
            'Title' => $this->title,
            'EventDate' => $this->event_date,
            'Content' => $this->content,
            'Image' => base64_encode($this->image),
        ];
    }
}
