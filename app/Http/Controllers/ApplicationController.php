<?php

namespace App\Http\Controllers;

use App\Country;
use App\Disability;
use App\Marital_status;
use App\Program;
use App\States;
use App\Streams;
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
        $disabilities = Disability::all();
        $programs = Program::all();

        return view('application.create', compact('countries', 'states', 'streams', 'marital_statuses', 'disabilities', 'programs'));
    }
}
