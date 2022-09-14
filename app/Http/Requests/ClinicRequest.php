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
        return [
            'city' => 'required',
            'name' => 'required',
            'inn' => 'required',
            'adress' => 'nullable',
            'phone' => 'required',
            'email' => 'nullable|email',
            'site' => 'nullable',
            'contactName' => 'required',
            'contactPosition' => 'required',
            'contactPhone' => 'required',
            'contactEmail' => 'nullable|email',
            'personalData' => 'accepted',
        ];
    }
}
