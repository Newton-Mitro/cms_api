<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Name' => 'required',
            'Designation' => 'required',
            'Content' => 'required',
            'Image' => 'required',
        ];
    }
}
