@extends('layouts.app')

@section('content')
<div class="w-2/3 mx-auto">
    <!-- Unprocessed -->
    <div class="flex flex-col items-center">
        <div class="text-left font-bold text-xs uppercase text-red-darker mb-0">
            Pending Application
        </div>
        
        <div class="bg-white shadow-md rounded my-6 w-full mt-0">
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Application No
                        </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Date Created
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pendings as $pending)
                    <tr class="hover:bg-grey-lightest">
                        <td class="border-b border-grey-light">
                            <a class="block no-underline px-6 py-4"
                               href="{{ route('application.show', ['application' => $pending->id]) }}">
                                {{ $pending->application_no }}
                            </a>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            {{ $pending->created_at }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="block px-6 py-4 no-underline text-blue-light text-sm uppercase font-bold hover:bg-grey-lightest" href="{{ route('application.create') }}">New Application</a>
        </div>
    </div>
    
    <!-- Processed -->
    <div class="flex flex-col items-center mt-10">
        <div class="text-left font-bold text-xs uppercase text-red-darker mb-0">
            Submitted Applications
        </div>
        
        <div class="bg-white shadow-md rounded my-6 w-full mt-0">
            <table class="text-left w-full border-collapse">
                <thead>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Application No
                    </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Date Submitted
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($submissions as $submission)
                    <tr class="hover:bg-grey-lightest">
                        <td class="border-b border-grey-light">
                            <a class="block no-underline px-6 py-4"
                               href="{{ route('submission.show', ['application' => $submission->id]) }}">
                                {{ $submission->application_no }}
                            </a>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            {{ $submission->submitted_on }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection