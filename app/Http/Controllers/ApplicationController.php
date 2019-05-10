<?php

namespace App\Http\Controllers;

use App\Country;
use App\States;
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

        return view('application.create', compact('countries', 'states'));
    }
}
