<?php

namespace App\Http\Resources\ExecutiveSocialLink;

use Illuminate\Http\Resources\Json\JsonResource;

class StaffSocialLinkResource extends JsonResource {

    public function toArray($request) {
        return [
            'ID' => $this->id,
            'ManagementExecutiveId' => $this->management_executive_id,
            'SocialLinkTypeId' => $this->social_link_type_id,
            'SocialLink' => $this->social_link,
        ];
    }
}
