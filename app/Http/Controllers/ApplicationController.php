<?php

namespace App\Http\Controllers;

use App\Country;
use App\Country_of_Residence;
use App\Degree_of_Study;
use App\Disability;
use App\Gender;
use App\Marital_status;
use App\Program;
use App\State_of_Residence;
use App\States;
use App\Streams;
use App\Title;
use Illuminate\Http\Request;

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
        $marital_statuses = Marital_status::all();
        $programs = Program::all();
        $genders = Gender::all();
        $country_of_residences = Country_of_Residence::all();
        $state_of_residences = State_of_Residence::all();
        $disabilities = Disability::all();
        $degree_of_studies = Degree_of_Study::all();
        $titles = Title::all();

        return view('application.create', compact('countries', 'states', 'streams', 'marital_statuses', 'programs', 'genders',
            'country_of_residences', 'state_of_residences', 'disabilities', 'degree_of_studies',  'titles'));
    }
}
