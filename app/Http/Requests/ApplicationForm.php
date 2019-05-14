<?php

namespace App\Http\Requests;

use App\AppContactDetails;
use App\AppEducationHistory;
use App\Application;
use App\AppPersonalDetails;
use App\AppProgrameDetails;
use App\AppRefereeDetails;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

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

    public function persist()
    {
        $max_id = Application::max('id') ?? 1;

        $max_id = str_pad($max_id, 5, '0', STR_PAD_LEFT);

        $year = date('Y');

        $application_no = $year . $max_id;

        DB::transaction(function() use ($application_no){

            $application_id = Application::create([
                'application_no' => $application_no,
                'applicant_id' => auth()->id()
            ])->id;

            AppPersonalDetails::create([
                'application_id' => $application_id,
                'last_name'  => $this->last_name,
                'first_name'  => $this->first_name,
                'middle_name'  => $this->middle_name,
                'gender_id'  => $this->gender,
                'marital_status_id'  => $this->marital_status,
                'date_of_birth'  => Carbon::create($this->date_of_birth),
                'nationality_id'  => $this->nationality,
                'state_of_origin_id'  => $this->state,
                'disabled_id'  => $this->disability,
                'disability'  => $this->disability_details
            ]);

            AppContactDetails::create([
                'application_id' => $application_id,
                'email' => $this->email,
                'phone' => $this->mobile_number,
                'address' => $this->address,
                'country_of_residence_id' => $this->country_of_residence,
                'state_of_residence_id' => $this->state_of_residence,
                'city' => $this->city,
                'zip_code' => $this->zip_code,
            ]);

            AppEducationHistory::create([
                'application_id' => $application_id,
                'institution' => $this->institution,
                'degree_id' => $this->degree,
                'course' => $this->course_of_study,
                'start_month_id' => $this->from_month,
                'start_year' => $this->from_year,
                'graduation_month_id' => $this->to_month,
                'graduation_year' => $this->to_year
            ]);

            AppProgrameDetails::create([
                'application_id' => $application_id,
                'program_id' => $this->program,
                'stream_id' => $this->stream,
            ]);

            AppRefereeDetails::create([
                'application_id' => $application_id,
                'referee_title_id' => $this->referee_title,
                'referee_name' => $this->referee_name,
                'referee_email' => $this->referee_email,
                'referee_phone' => $this->referee_phone,
                'referee_affiliation' => $this->referee_affiliation
            ]);
        }, 3);
    }
}
