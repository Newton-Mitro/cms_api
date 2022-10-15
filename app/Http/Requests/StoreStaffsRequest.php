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

class StoreStaffsRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'StaffName'         => 'required',
            'StaffImage'        => 'required',
            'StaffDesignation'  => 'required',
            'AboutTheStaff'     => 'required',
        ];
    }
}
