<?php

namespace App\Http\Resources\Testimonial;

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

class TestimonialCollection extends JsonResource {

    public function toArray($request) {
        return [
            'Id'        => $this->id,
            'Name'      => $this->name,
            'Content'   => $this->content,
            'Rating'    => $this->rating,

        ];
    }
}
