<?php

namespace App\Http\Requests\Auth;

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

class LoginRequest extends FormRequest {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'email'     => 'required',
            'password'  => 'required',
        ];
    }
}
