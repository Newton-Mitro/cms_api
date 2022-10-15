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
 * @description    : User update request information validation..
 *========================================================================**/

class UpdatePostRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'Post_Image'    => 'required',
            'Post_Title'    => 'required',
            'Post_Content'  => 'required',
            'Post_Type_id'  => 'required',
        ];
    }
}
