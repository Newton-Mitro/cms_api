<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceCenterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ServiceCenterName' => 'required',
            'Address' => 'required',
            'Latitude' => 'required',
            'Longitude' => 'required',
            'PhoneNumber' => 'required',
            'Fax' => 'required',
            'Email' => 'required',
            'WorkDays' => 'required',
            'OpeningTime' => 'required',
            'ClosingTime' => 'required',
            'ActingInCharge' => 'required',
            'InChargeDesignation' => 'required',
            'InChargeDesignation' => 'required',
            'ServiceCenterTypeId' => 'required',
        ];
    }
}
