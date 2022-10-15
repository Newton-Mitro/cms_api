<?php

namespace App\Http\Resources\ManagementExecutives;

use Illuminate\Http\Resources\Json\JsonResource;

class ManagementExecutivesCollection extends JsonResource {

    public function toArray($request) {
        return [
            'id' => $this->id,
            'Image' => base64_encode($this->image),
            'Name' => $this->name,
            'Designation' => $this->designation,
            'Content' => $this->content,
        ];
    }
}
