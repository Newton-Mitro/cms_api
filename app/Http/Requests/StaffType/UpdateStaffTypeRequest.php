<?php

namespace App\Http\Requests\StaffType;

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

class UpdateStaffTypeRequest extends FormRequest {

    public function authorize() {
        return false;
    }

    public function rules() {
        return [
            //
        ];
    }
}