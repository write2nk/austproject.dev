<?php /** @noinspection PhpExpressionResultUnusedInspection */

namespace App\Http\Controllers;

use App\Title;
use App\Degree;
use App\Gender;
use App\Months;
use App\States;
use App\Country;
use App\Program;
use App\Streams;
use App\Disability;
use App\MaritalStatus;
use App\Http\Requests\ApplicationForm;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $applications = auth()->user()->applications;

        $pendings = $applications->filter(function ($value, $key){ return ! $value->submitted; });

        $submissions = $applications->filter(function ($value, $key){ return $value->submitted; });

        return view('application.index', compact('pendings', 'submissions'));
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
    public function store(ApplicationForm $form)
    {
        $form->persist();
    }

    public function show()
    {

    }
}
