<?php

namespace App\Http\Requests\Event;

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

class UpdateEventRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'eventTitle'    => 'required',
            'eventDate'     => 'required',
            'eventDetails'  => 'required',
            'eventImage'    => 'required',
        ];
    }
}
