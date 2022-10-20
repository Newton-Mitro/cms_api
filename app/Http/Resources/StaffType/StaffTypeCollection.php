<?php

namespace App\Http\Resources\StaffType;

use App\Utilities\LinkObject;
use Illuminate\Http\Resources\Json\JsonResource;

class StaffTypeCollection extends JsonResource {

    public function toArray($request) {
        return [
            'staffTypeId'       => $this->id,
            'staffTypeName'     => $this->staff_type_name,
            'links'             => [
                new LinkObject("show", "View Staff Type", route('staff-types.show', $this->id), "GET"),
                new LinkObject("update", "Update Staff Type", route('staff-types.update', $this->id), "PUT"),
                new LinkObject("destroy", "Delete Staff Type", route('staff-types.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
