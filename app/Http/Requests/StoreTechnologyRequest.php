<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTechnologyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:types|max:150',
            'description' => 'nullable|max:500',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Titolo obbligatorio',
            'name.unique' => 'Questo titolo esiste già',
            'name.max' => 'Superato il numero massimo di caratteri (150)',
            'description.max' => 'Superato il numero massimo di caratteri (500)',
        ];
    }
}
