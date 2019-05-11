<?php

namespace App\Http\Controllers;

use App\Country;
use App\Degree;
use App\Disability;
use App\Gender;
use App\MaritalStatus;
use App\Program;
use App\States;
use App\Streams;
use App\Title;

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

        return view('application.create', compact('countries', 'states', 'streams', 'marital_statuses', 'programs', 'genders',
            'disabilities', 'degrees',  'titles'));
    }
}
