@extends('layouts.app')

@section('title', 'Document Upload')

@section('content')
<div class="flex flex-col items-center">
    <form class="w-full max-w-md" action="{{ route('document.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        @if ($errors->any())
            <div class="text-red text-xs italic">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Documents -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="section-head">
                Documents
                <div class="flex flex-col normal-case mt-3">
                    <span> Upload a single PDF file that contains the following documents in order </span>
                    <span> (a) Passport Photograph </span>
                    <span> (b) Statement of Purpose </span>
                    <span> (c) Statement of Result(s) </span>
                    <span> (d) Academic Transcript(s) </span>
                </div>
            </div>
    
            <!-- Document Type -->
            <div class="w-full md:w-2/5 px-3 mb-4 md:mb-0">
                <label for="document_type" class="labels">
                    Document Type <span class="text-red">*</span>
                </label>
        
                <div class="relative">
                    <select name="document_type" id="document_type" class="selects">
                        <option value="">Select Document Type</option>
                        @foreach($document_types as $document_type)
                            <option value="{{ $document_type->id }}"
                                    {{ old('document_type') == $document_type->id ? 'selected' : '' }}>
                                {{ $document_type->document_type_name }}
                            </option>
                        @endforeach
            
                    </select>
                    <drop-down-svg></drop-down-svg>
                </div>
        
                @error('document_type')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Document -->
            <div class="w-full md:w-2/5 px-3 mb-4 md:mb-0">
                <label for="document" class="labels">
                    Document <span class="text-red">*</span>
                </label>
                
                <input class="mb-3 text-grey-dark py-2" type="file" name="document" id="document" required>
    
                <input type="text" name="application_id" value="{{ $application->id }}" hidden>
                
                @error('document')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Document -->
            <div class="w-full md:w-1/5 px-3 md:mb-0 mt-3">
                <input class="block px-2 py-3 block uppercase tracking-wide  rounded bg-blue text-white font-bold hover:bg-blue-dark" type="submit" value="Upload">
            </div>
            
            <div class="bg-white shadow-md rounded my-6 w-full mt-10">
                <table class="text-left w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="py-3 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Document Type</th>
                            <th class="py-3 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Uploaded</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($document_types as $document_type)
                            <tr>
                                <td class="border-b border-grey-light px-4 py-3 text-grey-darker">{{ $document_type->document_type_name }}</td>
                                <td class="py-3 px-4 border-b border-grey-light text-grey-darker">
                                    @if($documents->contains('document_type_id', $document_type->id))
                                        <span class="text-green-dark">
                                        {{ _('Uploaded') }}
                                        </span>
                                    @else
                                        <span class="text-red-dark">
                                        {{ _('Yet to be Uploaded') }}
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
        <!-- Submit -->
        <div class="flex flex-wrap -mx-3 mb-6 justify-center">
            <a class="block px-3 py-4 block uppercase tracking-wide  rounded bg-grey text-white font-bold hover:bg-grey-dark mr-3 no-underline" href="{{ route('application.show', ['application' => $application->id]) }}"> Previous </a>
            
            @if(count($documents) > 2)
                <a class="block px-3 py-4 block uppercase tracking-wide  rounded bg-blue text-white font-bold hover:bg-blue-dark no-underline" href="{{ route('payment.create', ['application' => $application->id]) }}">Next </a>
            @endif
        </div>
    </form>
</div>
@endsection