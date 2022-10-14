<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Name' => 'required',
            'Image' => 'required',
            'Content' => 'required',
            'Rating' => 'required',
        ];
    }
}
