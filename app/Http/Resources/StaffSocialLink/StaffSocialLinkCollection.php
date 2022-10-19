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

class StaffSocialLinkCollection extends JsonResource {

    public function toArray($request) {
        return [
            'socialMediaType'      => $this->socialMediaType->social_media_type_name,
            'SocialLink'            => $this->social_link,
        ];
    }
}
