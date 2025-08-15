<?php

declare(strict_types=1);

namespace App\Request;

use Hyperf\Validation\Request\FormRequest;

class UserRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'email' => 'string|email|required|max:255',
            'password' => 'string|required|min:6|max:255',
            're_password' => 'string|required|min:6|max:255|same:password',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'The name needs to be a text.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'email.string' => 'The email needs to be a text.',
            'email.email' => 'The email needs to be a email.',
            'email.required' => 'The email is required.',
            'email.max' => 'The email may not be greater than 255 characters.',
            'password.string' => 'The password needs to be a text.',
            'password.required' => 'The password is required.',
            'password.min' => 'The password needs to be at least 6 characters.',
            'password.max' => 'The password may not be greater than 255 characters.',
            're_password.string' => 'The password confirmation needs to be a text.',
            're_password.required' => 'The password confirmation is required.',
            're_password.min' => 'The password confirmation needs to be at least 6 characters.',
            're_password.max' => 'The password confirmation may not be greater than 255 characters.',
            're_password.same' => 'The password confirmation does not match.'
        ];
    }
}
