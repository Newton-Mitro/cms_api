<?php

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @description    : User update request information validation..
 *========================================================================**/

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }


    public function rules()
    {
        return [
            //
        ];
    }
}
