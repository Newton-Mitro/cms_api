<?php

namespace App\Http\Resources\Staff;

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
            'id'            => $this->id,
            'Name'          => $this->name,
            'Designation'   => $this->designation,
            'Content'       => $this->content,
        ];
    }
}
