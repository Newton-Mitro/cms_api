<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 18-10-2022
 * @description    : Post Update Validation
 *========================================================================**/

class UpdatePostRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'postTitle'     => 'required',
            'postContent'   => 'required',
            'postTypeId'    => 'required',
        ];
    }
}
