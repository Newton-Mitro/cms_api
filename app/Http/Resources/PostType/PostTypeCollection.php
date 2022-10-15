<?php

namespace App\Http\Resources\PostType;

use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Post  resource collection.
 *========================================================================**/

class PostTypeCollection extends JsonResource {

    public function toArray($request) {
        return  [
            'PostTypeId' => $this->id,
            'PostTypeName' => $this->post_type_name,
        ];
    }
}
