<?php

namespace App\Http\Requests\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 18-10-2022
 * @description    : 
 *========================================================================**/

class UpdateTestimonialRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'clientName'                    => 'required',
            'clientProfessionOrDesignation' => 'required',
            'clientTestimonial'             => 'required',
            'clientImage'                   => 'required',
            'clientRating'                  => 'required|nullable',
        ];
    }
}
