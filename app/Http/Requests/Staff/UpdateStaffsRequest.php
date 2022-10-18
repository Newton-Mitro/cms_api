<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : 
 *========================================================================**/

class UpdateStaffsRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name'          => 'required',
            'designation'   => 'required',
            'content'       => 'required',
            'image'         => 'required',
        ];
    }
}
