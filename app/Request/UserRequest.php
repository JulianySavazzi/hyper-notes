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
            'name' => 'string|optional|max:255',
            'email' => 'string|email|required|max:255',
            'password' => 'string|required|min:6|max:255',
            're_password' => 'string|required|min:6|max:255|same:password',
        ];
    }
}
