<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
