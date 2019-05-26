<?php /** @noinspection PhpExpressionResultUnusedInspection */

namespace App\Http\Controllers;

use App\Application;
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
use function redirect;

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
//        foreach(request()->education as $education){
//            dd($education['institution']);
//        }

        $application = $form->persist();

        dd($application);

        return redirect()->route('document.create', ['application' => $application]);
    }

    public function show(Application $application)
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

        $form = Application::with([
            'personal', 'contact', 'education',
            'program', 'referee'
        ])->where('id','=', $application->id)->first();

        return view('application.edit', compact('form', 'countries', 'states', 'streams', 'marital_statuses', 'programs', 'genders',
            'disabilities', 'degrees',  'titles', 'months'));
    }

    public function update(ApplicationForm $form, Application $application)
    {
        $form->update($application);

        return redirect()->route('document.create', ['application' => $application]);
    }
}
