<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : User store request information validation.
 *========================================================================**/

class StoreEducationRequest extends FormRequest {
    
    public function authorize() {
        return false;
    }

    public function rules() {
        return [
            //
        ];
    }
}
