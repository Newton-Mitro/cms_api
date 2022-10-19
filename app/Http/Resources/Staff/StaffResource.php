<?php

namespace App\Http\Resources\Staff;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\StaffSocialLink\StaffSocialLinkCollection;

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

class StaffResource extends JsonResource {

    public function toArray($request) {
        return [
            'staffId'               => $this->id,
            'staffName'             => $this->staff_name,
            'staffImage'            => base64_encode($this->staff_image),
            'staffDesignation'      => $this->staff_designation,
            'aboutTheStaff'         => $this->about_the_staff,
            'staffTypeId'           => $this->staff_type_id,
            'staffSocialLinks'      => StaffSocialLinkCollection::collection($this->staffSocialLinks),
        ];
    }
}
