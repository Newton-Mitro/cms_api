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

class UpdatePostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'Post_Image' => 'required',
            'Post_Title' => 'required',
            'Post_Content' => 'required',
            'Post_Type_id' => 'required',
        ];
    }
}
