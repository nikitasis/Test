<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConvertStringRequest extends FormRequest
{
    public function validate()
    {
        return ['input' => 'required|string|max:32',];
    }

    public function authorize()
    {
        return true;
    }
}
