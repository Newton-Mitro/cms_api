<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceCenterRequest extends FormRequest {

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
