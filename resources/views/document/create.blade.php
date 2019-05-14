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
    
            <div class="w-full px-3 mb-4 md:mb-0 pt-2 border">
                <label for="referee_title" class="labels">
                    Documents <span class="text-red lowercase text-xs italic">(max size 2MB)*</span>
                </label>
                
                <input class="mb-3 text-grey-dark px-3 py-4" type="file" name="document" id="document" required>
    
                <input type="text" name="application_id" value="{{ $application->id }}" hidden>
                
                @error('document')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
        </div>
    
        <!-- Submit -->
        <div class="flex flex-wrap -mx-3 mb-6 justify-center">
            <input class="block px-3 py-4 block uppercase tracking-wide  rounded bg-grey text-white font-bold hover:bg-grey-dark mr-3" type="button" value="Previous">
            
            <input class="block px-3 py-4 block uppercase tracking-wide  rounded bg-blue text-white font-bold hover:bg-blue-dark" type="submit" value="Next">
        </div>
    </form>
</div>
@endsection