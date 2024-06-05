<?php

namespace App\Http\Requests\Blog;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class BlogRequest extends FormRequest
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
            'title' => 'required|min:3',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute tối thiểu :min ký tự',
        ];
    }

    public function attributes() {
        return [
            'title' => 'Tiêu đề',
            'content' => 'Nội dung',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = ApiResponse(false,Response::HTTP_BAD_REQUEST,$validator->errors(),null);
        throw( new ValidationException($validator,$response) );
    }
}
