<?php

declare(strict_types=1);

namespace App\Request;

use Hyperf\Validation\Request\FormRequest;

class NoteRequest extends FormRequest
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
            'title' => 'string|max:255',
            'content' => 'string|required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.string' => 'The title needs to be a text.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'content.string' => 'The content needs to be a text.',
            'content.required' => 'The content is required.',
        ];
    }
}
