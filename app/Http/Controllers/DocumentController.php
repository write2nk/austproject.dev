<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('document.create');
    }

    public function store()
    {
        $this->validate([
            'document' => 'required|file|mimes:pdf|max:2048'
        ])
        dd(request()->all());
    }
}
