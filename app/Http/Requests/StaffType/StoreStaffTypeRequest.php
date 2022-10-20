<?php

namespace App\Http\Requests\StaffType;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Newton Mitro
 * @email          : newtonmitro@gmail.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 20-10-2022
 * @description    : 
 *========================================================================**/

class StoreStaffTypeRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'staffTypeName'         => 'required',
        ];
    }
}
