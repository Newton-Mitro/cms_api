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

class StoreServiceCenterRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'ServiceCenterName'     => 'required',
            'Address'               => 'required',
            'Latitude'              => 'required',
            'Longitude'             => 'required',
            'PhoneNumber'           => 'required',
            'Fax'                   => 'required',
            'Email'                 => 'required',
            'WorkDays'              => 'required',
            'OpeningTime'           => 'required',
            'ClosingTime'           => 'required',
            'ActingInCharge'        => 'required',
            'InChargeDesignation'   => 'required',
            'InChargeDesignation'   => 'required',
            'ServiceCenterTypeId'   => 'required',
        ];
    }
}
