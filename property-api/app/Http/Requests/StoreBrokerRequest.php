<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrokerRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name' => [$this->isPostRequest(), 'unique:users', 'max:255', $this->id],
            'last_name' => [$this->isPostRequest(), 'max:255'],
            'address' => [$this->isPostRequest(), 'max:255'],
            'city' => [$this->isPostRequest()],
            'zip_code' => [$this->isPostRequest()],
            'phone_number' => [$this->isPostRequest(), 'numeric', 'digits:11'],
            'logo_path' => [$this->isPostRequest()],
        ];
    }

    private function isPostRequest()
    {
        return request()->isMethod('post') ? 'required' : 'sometimes';
    }
}
