<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffsRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name'          => 'required',
            'designation'   => 'required',
            'content'       => 'required',
            'image'         => 'required',
        ];
    }
}
