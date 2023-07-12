<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'types_of_document_id' => 'required|numeric|min:0',
            'identification_number' => 'required|string|max:30',
            'email' => 'required|email|max:255',
            'international_phone_code_id' => 'required|numeric|min:0',
            'phone' => 'required|string|max:20',
            'optional_international_phone_code_id' => 'nullable|numeric|min:0',
            'optional_phone' => 'nullable|string|max:20',
            'date_of_birth' => 'required|date',
            'types_of_genre_id' => 'required|numeric|min:0',
            'blood_type_id' => 'required|numeric|min:0',
            'civil_status_id' => 'required|numeric|min:0',
            'family_composition' => 'required|string',
            'country' => 'required|string|max:70',
            'state' => 'required|string|max:70',
            'city' => 'required|string|max:70',
            'address' => 'required|string',
            'school_grade_id' => 'required|numeric|min:0',
            'occupation' => 'required|string|max:50',
            'work_area' => 'required|string|max:50',
            'HdV' => 'required|string',
            'EPS' => 'required|string',
            'AFP' => 'required|string',
            'ARL' => 'required|string',
            'CCF' => 'required|string',
            'emergency_contact' => 'required|string|max:50',
            'emergency_international_phone_code_id' => 'required|numeric|min:0',
            'emergency_phone' => 'required|string|max:20',
            'socioeconomic_stratum' => 'required|string',
        ];
    }
}
