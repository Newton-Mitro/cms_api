<?php

namespace App\Http\Resources\StaffSocialLink;

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

class StaffSocialLinkResource extends JsonResource {

    public function toArray($request) {
        return [
            'staffSocialLinkId'     => $this->id,
            'staffId'               => $this->staff_id,
            'socialMediaTypeId'     => $this->social_media_type_id,
            'socialLink'            => $this->social_link,
        ];
    }
}
