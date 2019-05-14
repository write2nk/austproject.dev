<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationForm extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => '',
            'gender' => 'required',
            'marital_status' => 'required',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'state' => 'required',
            'disability' => 'required',
            'disability_details' => 'required_if:disability,==,1',
            'email' => 'required|email',
            'mobile_number' => 'required',
            'address' => 'required',
            'country_of_residence' => 'required',
            'state_of_residence' => 'required',
            'city' => 'required',
            'zip_code' => '',
            'institution' => 'required',
            'degree' => 'required',
            'course_of_study' => 'required',
            'from_month' => 'required',
            'from_year' => 'required',
            'to_month' => 'required',
            'to_year' => 'required',
            'program' => 'required',
            'stream' => 'required',
            'referee_title' => 'required',
            'referee_name' => 'required',
            'referee_email' => 'required|email',
            'referee_phone' => 'required',
            'referee_affiliation' => 'required',
            'declaration' => ''
        ];
    }
}
