<?php

namespace App\Http\Controllers;

use App\Application;
use function compact;
use Illuminate\Http\Request;
use function view;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Application $application)
    {
        return view('document.create', compact('application'));
    }

    public function store(Request $request)
    {
        $application_no = '';

        $validated = request()->validate(['document' => 'required|file|mimes:pdf|max:2048']);

        dd($validated);
        
        $filename = '';

        $path = request()->store('documents');

        dd($path);
    }
}
