<?php

namespace App\Http\Controllers;

use App\AppPersonalDetails;
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

    public function store(ApplicationForm $request)
    {
        dd(request()->all());

        $personal = AppPersonalDetails::create([
            'user_id' => auth()->id(),
            'last_name'  => request(['last_name']),
            'first_name'  => request(['first_name']),
            'middle_name'  => request(['middle_name']),
            'gender_id'  => request(['gender']),
            'marital_status_id'  => request(['marital_status']),
            'date_of_birth'  => request(['date_of_birth']),
            'nationality_id'  => request(['nationality']),
            'state_of_origin_id'  => request(['state']),
            'disabled_id'  => request(['disability']),
            'disability_details'  => request(['disability_details'])
        ]);

        dd($personal);
    }
}
