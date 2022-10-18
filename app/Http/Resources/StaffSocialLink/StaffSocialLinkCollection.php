<?php

namespace App\Http\Resources\ExecutiveSocialLink;

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
            'ID' => $this->id,
            'ManagementExecutiveId' => $this->management_executive_id,
            'SocialLinkTypeId'      => $this->social_link_type_id,
            'SocialLink'            => $this->social_link,
        ];
    }
}
