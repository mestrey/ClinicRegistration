<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinicRequest extends FormRequest
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
        $phoneRegex = "regex:/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/";

        return [
            'city' => 'required',
            'name' => 'required',
            'inn' => 'required|numeric|digits:12',
            'adress' => 'nullable',
            'phone' => ['required', $phoneRegex],
            'email' => 'nullable|email',
            'site' => 'nullable',
            'contactName' => 'required',
            'contactPosition' => 'required',
            'contactPhone' => ['required', $phoneRegex],
            'contactEmail' => 'nullable|email',
            'personalData' => 'accepted',
        ];
    }
}
