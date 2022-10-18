<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest {

    public function authorize() {
        return false;
    }

    public function rules() {
        return [
            //
        ];
    }
}
