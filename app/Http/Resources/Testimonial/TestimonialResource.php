<?php

namespace App\Http\Resources\Testimonial;

use App\Utilities\LinkObject;
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

class TestimonialResource extends JsonResource {

    public function toArray($request) {
        return [
            'testimonialId'                     => $this->id,
            'clientName'                        => $this->client_name,
            'clientTestimonial'                 => $this->client_testimonial,
            'clientRating'                      => $this->client_rating,
            'clientImage'                       => $this->client_image,
            'clientProfessionOrDesignation'     => $this->client_profession_or_designation,
            'links'                             => [
                new LinkObject("index", "Testimonials", route('testimonials.index'), "GET"),
                new LinkObject("update", "Update Testimonial", route('testimonials.update', $this->id), "PUT"),
                new LinkObject("destroy", "Delete Testimonial", route('testimonials.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
