<?php

namespace App\Http\Resources\ExecutiveSocialLink;

use Illuminate\Http\Resources\Json\JsonResource;

class ExecutiveSocialLinkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID' => $this->id,
            'ManagementExecutiveId' => $this->management_executive_id,
            'SocialLinkTypeId' => $this->social_link_type_id,
            'SocialLink' => $this->social_link,
        ];
    }
}
