<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
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
            'city' => 'required|string',
            'nickname' => 'required|string',
            'abbreviation' => 'required|string',
            'year_founded' => 'required|integer'
        ];
    }
}
