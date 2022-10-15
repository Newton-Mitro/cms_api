<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest {
    
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'Title' => 'required',
            'EventDate' => 'required',
            'Content' => 'required',
            'Image' => 'required',
        ];
    }
}
