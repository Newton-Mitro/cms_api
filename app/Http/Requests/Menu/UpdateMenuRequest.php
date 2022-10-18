<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 18-10-2022
 * @description    : Menu Update Validation
 *========================================================================**/

class UpdateMenuRequest extends FormRequest {

    public function authorize() {
        return true;
    }


    public function rules() {
        return [
            'menuTitle' => 'required',
        ];
    }
}
