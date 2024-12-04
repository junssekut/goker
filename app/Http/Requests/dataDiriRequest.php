<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dataDiriRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|min:3|max:50',
            'panggilan' => 'required|min:2',
            'lahir' => ['required', 'regex:/^[a-zA-Z\s]+-[0-3][0-9]-[0-1][0-9]-\d{4}$/',],
            'sekolah' => 'required|min:5'
        ];
    }
}
