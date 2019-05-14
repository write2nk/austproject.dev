<?php /** @noinspection PhpExpressionResultUnusedInspection */

namespace App\Http\Controllers;

use App\AppContactDetails;
use App\AppEducationHistory;
use App\AppPersonalDetails;
use App\AppProgrameDetails;
use App\AppRefereeDetails;
use App\Country;
use App\Degree;
use App\Disability;
use App\Gender;
use App\Http\Requests\ApplicationForm;
use App\MaritalStatus;
use App\Months;
use App\Program;
use App\States;
use App\Streams;
use App\Title;
use Carbon\Carbon;
use function request;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $countries = Country::all();
        $states = States::all();
        $streams = Streams::all();
        $marital_statuses = MaritalStatus::all();
        $programs = Program::all();
        $genders = Gender::all();
        $disabilities = Disability::all();
        $degrees = Degree::all();
        $titles = Title::all();
        $months = Months::all();

        return view('application.create', compact('countries', 'states', 'streams', 'marital_statuses', 'programs', 'genders',
            'disabilities', 'degrees',  'titles', 'months'));
    }

    /**
     * @param ApplicationForm $request
     */
    public function store(ApplicationForm $request)
    {
        $personal = AppPersonalDetails::create([
            'user_id' => auth()->id(),
            'last_name'  => $request->last_name,
            'first_name'  => $request->first_name,
            'middle_name'  => $request->middle_name,
            'gender_id'  => $request->gender,
            'marital_status_id'  => $request->marital_status,
            'date_of_birth'  => Carbon::create($request->date_of_birth),
            'nationality_id'  => $request->nationality,
            'state_of_origin_id'  => $request->state,
            'disabled_id'  => $request->disability,
            'disability'  => $request->disability_details
        ]);

        $contact = AppContactDetails::create([
            'applicant_id' => $personal->id,
            'email' => $request->email,
            'phone' => $request->mobile_number,
            'address' => $request->address,
            'country_of_residence_id' => $request->country_of_residence,
            'state_of_residence_id' => $request->state_of_residence,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
        ]);

        $education = AppEducationHistory::create([
            'applicant_id' => $personal->id,
            'institution' => $request->institution,
            'degree_id' => $request->degree,
            'course' => $request->course_of_study,
            'start_month_id' => $request->from_month,
            'start_year' => $request->from_year,
            'graduation_month_id' => $request->to_month,
            'graduation_year' => $request->to_year
        ]);

        $program = AppProgrameDetails::create([
            'applicant_id' => $personal->id,
            'program_id' => $request->program,
            'stream_id' => $request->stream,
        ]);

        $referee = AppRefereeDetails::create([
            'applicant_id' => $personal->id,
            'referee_title_id' => $request->referee_title,
            'referee_name' => $request->referee_name,
            'referee_email' => $request->referee_email,
            'referee_phone' => $request->referee_phone,
            'referee_affiliation' => $request->referee_affiliation
        ]);

        
    }
}
