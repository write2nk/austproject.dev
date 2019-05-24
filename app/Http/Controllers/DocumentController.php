<?php

namespace App\Http\Controllers;

use App\AppDocuments;
use App\Application;
use App\DocumentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Application $application)
    {
        $document_types = DocumentType::all();
        $documents = AppDocuments::where('application_id', $application->id)->get();

        return view('document.create', compact('application', 'document_types', 'documents'));
    }

    public function store(Request $request)
    {
        $validated = request()->validate([
            'document' => 'required|file|mimes:pdf|max:2048',
            'document_type' => 'required',
            'application_id' => 'required'
        ]);

        $application = Application::find(request()->application_id);

        $dir = 'documents/' . $application->application_no;

        $filename = $application->application_no . '-' . request()->document_type . '.' . 'pdf';

        if(! Storage::exists($dir)){
            Storage::makeDirectory($dir);
        }

        $path = request()->file('document')->storeAs($dir, $filename);

        AppDocuments::create([
            'application_id' => $application->id,
            'document_type_id' => request()->document_type,
            'document_url' => $path
        ]);

        return redirect()->route('document.create', ['application' => $application]);
    }
}
