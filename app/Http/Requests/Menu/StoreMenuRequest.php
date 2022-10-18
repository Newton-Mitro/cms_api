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
 * @UpdatedAt      : 15-10-2022
 * @description    : Menu Create Validation
 *========================================================================**/

class StoreMenuRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'menuTitle' => 'required',
        ];
    }
}
