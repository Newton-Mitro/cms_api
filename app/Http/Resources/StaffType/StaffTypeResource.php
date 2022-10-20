<?php

namespace App\Http\Resources\StaffType;

use App\Utilities\LinkObject;
use Illuminate\Http\Resources\Json\JsonResource;

class StaffTypeResource extends JsonResource {

    public function toArray($request) {
        return [
            'staffTypeId'       => $this->id,
            'staffTypeName'     => $this->staff_type_name,
            'links'             => [
                new LinkObject("index", "Staff Types", route('staff-types.index'), "GET"),
                new LinkObject("update", "Update Post", route('staff-types.update', $this->id), "PUT"),
                new LinkObject("destroy", "Delete Post", route('staff-types.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
