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
            'education.*.institution' => 'required',
            'education.*.degree' => 'required',
            'education.*.course_of_study' => 'required',
            'education.*.from_month' => 'required',
            'education.*.from_year' => 'required',
            'education.*.to_month' => 'required',
            'education.*.to_year' => 'required',
            'program' => 'required',
            'stream' => 'required',
            'referee.*.title' => 'required',
            'referee.*.name' => 'required',
            'referee.*.email' => 'required|email',
            'referee.*.phone' => 'required',
            'referee.*.affiliation' => 'required',
            'declaration' => ''
        ];
    }

    public function persist()
    {
        $max_id = Application::max('id') ?? 1;

        $max_id = str_pad($max_id, 5, '0', STR_PAD_LEFT);

        $year = date('Y');

        $application_no = $year . $max_id;

        DB::transaction(function() use ($application_no) {

            $application_id = Application::create([
                'application_no' => $application_no,
                'applicant_id'   => auth()->id()
            ])->id;

            AppPersonalDetails::create([
                'application_id'     => $application_id,
                'last_name'          => $this->last_name,
                'first_name'         => $this->first_name,
                'middle_name'        => $this->middle_name,
                'gender_id'          => $this->gender,
                'marital_status_id'  => $this->marital_status,
                'date_of_birth'      => Carbon::create($this->date_of_birth),
                'nationality_id'     => $this->nationality,
                'state_of_origin_id' => $this->state,
                'disabled_id'        => $this->disability,
                'disability'         => $this->disability_details
            ]);

            AppContactDetails::create([
                'application_id'          => $application_id,
                'email'                   => $this->email,
                'phone'                   => $this->mobile_number,
                'address'                 => $this->address,
                'country_of_residence_id' => $this->country_of_residence,
                'state_of_residence_id'   => $this->state_of_residence,
                'city'                    => $this->city,
                'zip_code'                => $this->zip_code,
            ]);

            foreach ($this->education as $education)
            {
                AppEducationHistory::create([
                    'application_id'      => $application_id,
                    'institution'         => $education['institution'],
                    'degree_id'           => $education['degree'],
                    'course'              => $education['course_of_study'],
                    'start_month_id'      => $education['from_month'],
                    'start_year'          => $education['from_year'],
                    'graduation_month_id' => $education['to_month'],
                    'graduation_year'     => $education['to_year']
                ]);
            }

            AppProgrameDetails::create([
                'application_id' => $application_id,
                'program_id' => $this->program,
                'stream_id' => $this->stream,
            ]);

            foreach($this->referee as $referee)
            {
                AppRefereeDetails::create([
                    'application_id'      => $application_id,
                    'referee_title_id'    => $referee['title'],
                    'referee_name'        => $referee['name'],
                    'referee_email'       => $referee['email'],
                    'referee_phone'       => $referee['phone'],
                    'referee_affiliation' => $referee['affiliation']
                ]);
            }
        }, 3);

        return Application::where('application_no', '=', $application_no)->first();
    }

    public function update(Application $application)
    {
        DB::transaction(function() use ($application){
            $application->personal()->update([
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

            $application->contact->update([
                'email' => $this->email,
                'phone' => $this->mobile_number,
                'address' => $this->address,
                'country_of_residence_id' => $this->country_of_residence,
                'state_of_residence_id' => $this->state_of_residence,
                'city' => $this->city,
                'zip_code' => $this->zip_code,
            ]);

            foreach ($this->education as $education)
            {
                AppEducationHistory::where('id', $education['edu'])
                    ->update([
                        'institution' => $education['institution'],
                        'degree_id' => $education['degree'],
                        'course' => $education['course_of_study'],
                        'start_month_id' => $education['from_month'],
                        'start_year' => $education['from_year'],
                        'graduation_month_id' => $education['to_month'],
                        'graduation_year' => $education['to_year']
                    ]);
            }

            $application->program->update([
                'program_id' => $this->program,
                'stream_id' => $this->stream,
            ]);

            foreach($this->referee as $referee)
            {
                AppRefereeDetails::where('id', $referee['ref'])
                    ->update([
                        'referee_title_id' => $referee['title'],
                        'referee_name' => $referee['name'],
                        'referee_email' => $referee['email'],
                        'referee_phone' => $referee['phone'],
                        'referee_affiliation' => $referee['affiliation']
                    ]);
            }
        }, 3);
    }
}
