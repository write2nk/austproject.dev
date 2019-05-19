<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    //creates show method

    public function show()
    {
        return view('submission.show');
    }
}
