<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required",
            "type_id" => "required|integer",
            "release_date" => "required|integer",
            "pages" => "required|integer",
            "author" => "required",
            "description" => "required",
            "image" => "required|url",
            "price" => "required|integer",
        ];
    }
}
