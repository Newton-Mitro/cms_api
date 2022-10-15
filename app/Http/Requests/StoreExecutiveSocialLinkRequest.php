<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Application stage seeder
 *========================================================================**/

class StoreExecutiveSocialLinkRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'management_executive_id' => 'required',
            'social_link_type_id' => 'required',
            'social_link' => 'required'
        ];
    }
}
