<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'StaffName' => 'required',
            'StaffImage' => 'required',
            'StaffDesignation' => 'required',
            'AboutTheStaff' => 'required',
        ];
    }
}
