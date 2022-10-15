<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @description    : User store request information validation.
 *========================================================================**/

class StorePostRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'PostImage' => 'required',
            'PostTitle' => 'required',
            'PostContent' => 'required',
            'PostTypeId' => 'required',
        ];
    }
}
