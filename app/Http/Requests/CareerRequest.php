<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CareerRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
        "position_id" => "required",
        "name"        => "required",
        "email"       => "required",
        "phone"       => "required",
        "file"        => "required",
        ];
    }
}