<?php

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @description    : Post type resource .
 *========================================================================**/


namespace App\Http\Resources\PostType;

use Illuminate\Http\Resources\Json\JsonResource;

class PostTypeResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'PostTypeId' => $this->id,
            'PostTypeName' => $this->post_type_name,
        ];
    }
}
