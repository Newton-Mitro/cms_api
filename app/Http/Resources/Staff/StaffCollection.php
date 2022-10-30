<?php

namespace App\Http\Resources\Staff;

use App\Utilities\LinkObject;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : job circular resource collection.
 *========================================================================**/

class StaffCollection extends JsonResource {

    public function toArray($request) {
        return [
            'staffId'               => $this->id,
            'staffName'             => $this->staff_name,
            'staffDesignation'      => $this->staff_designation,
            'staffImage'            => base64_encode(Storage::get(str_replace("storage", "public", $this->staff_image))),
            'aboutTheStaff'         => $this->about_the_staff,
            'staffType'             => $this->staffType->staff_type_name,
            'links'                 => [
                new LinkObject("show", "View Staff", route('staffs.show', $this->id, false), "GET"),
                new LinkObject("update", "Update Staff", route('staffs.update', $this->id, false), "PUT"),
                new LinkObject("destroy", "Delete Staff", route('staffs.destroy', $this->id, false), "DELETE"),
            ],
        ];
    }
}
