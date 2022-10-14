<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonialRequest extends FormRequest
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
