@extends('layouts.app')

@section('title', 'Edit Application Form')

<!-- Personal Details -->
@section('content')
    <div class="flex flex-col items-center">
        <form class="w-full max-w-md" action="{{ route('application.update' ,['application' => $form->id]) }}" method="post">
            @method('patch')
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

            <!-- Personal Details -->
            <div class="flex flex-wrap -mx-3 mb-6 border rounded">
                <div class="section-head">
                    Personal Details
                </div>

                <!-- Last Name -->
                <div class="w-full px-3 mb-4 md:mb-0">
                    <label for="last_name" class="labels">
                        Last Name <span class="text-red">*</span>
                    </label>

                    <input type="text" value="{{ $form->personal->last_name }}" name="last_name"  required class="inputs" placeholder="Last Name">

                    @error('last_name')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- First Name -->
                <div class="w-full px-3 mb-4 md:mb-0">
                    <label for="first_name" class="labels">
                        First Name <span class="text-red">*</span>
                    </label>

                    <input type="text" value="{{ $form->personal->first_name }}" name="first_name"  required class="inputs" placeholder="First Name">

                    @error('first_name')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Middle Name -->
                <div class="w-full px-3 mb-4 md:mb-0">
                    <label for="middle_name" class="labels">Middle Name</label>
                    <input type="text" value="{{ $form->personal->middle_name }}" name="middle_name"  class="inputs" placeholder="Middle Name">
                    @error('middle_name')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Gender -->
                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label for="gender" class="labels">
                        Gender <span class="text-red">*</span>
                    </label>

                    <div class="relative">
                        <select name="gender"  class="selects">
                            <option value="">Select Gender</option>
                            @foreach($genders as $gender)
                                <option value="{{ $gender->id }}"
                                        {{ $form->personal->gender_id == $gender->id ? 'selected' : '' }}>
                                    {{ $gender->gender }}
                                </option>
                            @endforeach

                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>

                    @error('gender')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Marital Status -->
                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label for="marital_status" class="labels">
                        Marital Status <span class="text-red">*</span>
                    </label>

                    <div class="relative">
                        <select name="marital_status"  class="selects">
                            <option value="">Select Marital Status</option>
                            @foreach($marital_statuses as $marital_status)
                                <option value="{{ $marital_status->id }}"
                                        {{ $form->personal->marital_status_id == $marital_status->id ? 'selected' : '' }}>
                                    {{ $marital_status->marital_status }}
                                </option>
                            @endforeach
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>

                    @error('marital_status')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Date of Birth -->
                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label for="date_of_birth" class="labels">
                        Date of Birth <span class="text-red">*</span>
                    </label>

                    <date-picker value="{{ $form->personal->date_of_birth }}" name="date_of_birth" placeholder="Day Month Year" ></date-picker>

                    @error('date_of_birth')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Nationality -->
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <label for="nationality" class="labels">
                        Nationality <span class="text-red">*</span>
                    </label>

                    <div class="relative">
                        <select  name="nationality"  class="selects">
                            <option value="">Select Nationality</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}"
                                        {{ $form->personal->nationality_id == $country->id ? 'selected' : '' }}>
                                    {{ $country->country }} </option>
                            @endforeach
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>

                    @error('nationality')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- State -->
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <label for="state" class="labels">
                        State (Nigerians only) <span class="text-red">*</span>
                    </label>

                    <div class="relative">
                        <select name="state"  class="selects">
                            <option value="">Select State</option>
                            @foreach($states as $state)
                                <option value="{{ $state->id }}"
                                        {{ $form->personal->state_of_origin_id == $state->id ? 'selected' : '' }}>
                                    {{ $state->state }}
                                </option>
                            @endforeach
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>

                    @error('state')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Disability -->
                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label for="disability" class="labels">
                        Disability <span class="text-red">*</span>
                    </label>

                    <div class="relative">
                        <select name="disability"  class="selects">
                            <option value="">Select Disability</option>
                            @foreach($disabilities as $disability)
                                <option value="{{ $disability->id }}"
                                        {{ $form->personal->disabled_id == $disability->id ? 'selected' : '' }}>
                                    {{ $disability->disability }} </option>
                            @endforeach
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>

                    @error('disability')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Disability Details -->
                <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                    <label for="disability_details" class="labels">If Yes, Specify Disability</label>
                    <input type="text" value="{{ $form->personal->disability }}" name="disability_details"  required class="inputs" placeholder="Specify Disability">
                    @error('disability_details')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>
            </div>


            <!-- Contact Details -->
            <div class="flex flex-wrap -mx-3 mb-6 border rounded">
                <div class="section-head">
                    Contact Details
                </div>

                <!-- Email -->
                <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                    <label for="email" class="labels">
                        Email <span class="text-red">*</span>
                    </label>

                    <input type="text" value="{{ $form->contact->email }}" name="email"  class="inputs" placeholder="example@gmail.com">

                    @error('email')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Mobile Number -->
                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label for="mobile_number" class="labels">
                        Mobile Number <span class="text-red">*</span>
                    </label>

                    <input type="text" value="{{ $form->contact->phone }}" name="mobile_number"  required class="inputs" placeholder="+2347031234567">

                    @error('mobile_number')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Address -->
                <div class="w-full px-3 mb-4 md:mb-0">
                    <label for="address" class="labels">
                        Address
                    </label>

                    <input type="text" value="{{ $form->contact->address }}" name="address"  required class="inputs" placeholder="Km 10 Airport Road, Galadimawa">

                    @error('address')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Country of Residence -->
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <label for="country_of_residence" class="labels">
                        Country of Residence <span class="text-red">*</span>
                    </label>

                    <div class="relative">
                        <select name="country_of_residence"  class="selects">
                            <option value="">Select Country of Residence</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}"
                                        {{ $form->contact->country_of_residence_id == $country->id ? 'selected' : '' }}>
                                    {{ $country->country }}
                                </option>
                            @endforeach
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>

                    @error('country_of_residence')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- State of Residence -->
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <label for="state_of_residence" class="labels">
                        State (Nigerians only) <span class="text-red">*</span>
                    </label>

                    <div class="relative">
                        <select name="state_of_residence"  class="selects">
                            <option value="">Select State</option>
                            @foreach($states as $state)
                                <option value="{{ $state->id }}"
                                        {{ $form->contact->state_of_residence_id == $state->id ? 'selected' : '' }}>
                                    {{ $state->state }}
                                </option>
                            @endforeach
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>

                    @error('state_of_residence')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- City/Town -->
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <label for="city" class="labels">
                        City/Town <span class="text-red">*</span>
                    </label>

                    <input type="text" value="{{ $form->contact->city }}" name="city"  required class="inputs" placeholder="Accra">

                    @error('city')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Zip Code -->
                <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                    <label for="zip_code" class="labels">
                        Zip Code
                    </label>

                    <input type="text" value="{{ $form->contact->zip_code }}" name="zip_code"  class="inputs" placeholder="90210">

                    @error('zip_code')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>
            </div>

            
            <!-- Educational Background -->
            <div class="flex flex-wrap -mx-3 mb-6 border rounded">
                <div class="section-head">
                    Educational History
                </div>

                @foreach($form->education as $education)
                    <div class="flex flex-wrap border rounded shadow m-3 pt-2">
                        <!-- Institution -->
                        <div class="w-full px-3 mb-4 md:mb-0">
                            <label for="education[{{ $loop->index }}][institution]" class="labels">
                                Institution and Location <span class="text-red">*</span>
                            </label>
        
                            <input type="text" value="{{ $education->institution }}" name="education[{{ $loop->index }}][institution]"  required class="inputs" placeholder="African University of Science and Technology, Abuja">
        
                            @error("education.{{ $loop->index }}.institution")
                            <p class="text-red text-xs italic">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
        
                        <!-- Degree -->
                        <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                            <label for="education[{{ $loop->index }}][degree]" class="labels">
                                Degree <span class="text-red">*</span>
                            </label>
        
                            <div class="relative">
                                <select name="education[{{ $loop->index }}][degree]"  class="selects">
                                    <option value="">Select Degree</option>
                                    @foreach($degrees as $degree)
                                        <option value="{{ $degree->id }}"
                                                {{ $education->degree_id == $degree->id ? 'selected' : '' }}>
                                            {{ $degree->degree }}
                                        </option>
                                    @endforeach
        
                                </select>
                                <drop-down-svg></drop-down-svg>
                            </div>
        
                            @error("education.{{ $loop->index }}.degree")
                            <p class="text-red text-xs italic">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
        
                        <!-- Course of Study -->
                        <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                            <label for="education[{{ $loop->index }}][course_of_study]" class="labels">
                                Course of Study <span class="text-red">*</span>
                            </label>
        
                            <input type="text" value="{{ $education->course }}" name="education[{{ $loop->index }}][course_of_study]"  required class="inputs" placeholder="Computer Science">
        
                            @error("education.{{ $loop->index }}.course_of_study")
                            <p class="text-red text-xs italic">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
        
                        <!-- From -->
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                            <label for="education[{{ $loop->index }}][from_month]" class="labels">
                                Start Date <span class="text-red">*</span>
                            </label>
        
                            <div class="flex">
                                <div class="relative">
                                    <select name="education[{{ $loop->index }}][from_month]"  class="selects">
                                        <option value="">Select Month</option>
                                        @foreach($months as $month)
                                            <option value="{{ $month->id }}"
                                                    {{ $education->start_month_id == $month->id ? 'selected' : '' }}>
                                                {{ $month->months }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <drop-down-svg></drop-down-svg>
                                </div>
        
                                <div class="relative ml-3">
                                    <select name="education[{{ $loop->index }}][from_year]"  class="selects">
                                        <option value="">Select Year</option>
                                        @for ($i = 2019; $i > 1980; $i--)
                                            <option value={{ $i }}
                                                    {{ $education->start_year == $i ? 'selected' : '' }}>
                                                {{ $i }}
                                            </option>
                                        @endfor
        
                                    </select>
                                    <drop-down-svg></drop-down-svg>
                                </div>
                            </div>
        
                            @error("education.{{ $loop->index }}.from_month")
                            <p class="text-red text-xs italic">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
        
                        <!-- To -->
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                            <label for="education[{{ $loop->index }}][to_month]" class="labels">
                                Graduation Date <span class="text-red">*</span>
                            </label>
        
                            <div class="flex">
                                <div class="relative">
                                    <select name="education[{{ $loop->index }}][to_month]"  class="selects">
                                        <option value="">Select Month</option>
                                        @foreach($months as $month)
                                            <option value="{{ $month->id }}"
                                                    {{ $education->graduation_month_id == $month->id ? 'selected' : '' }}>
                                                {{ $month->months }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <drop-down-svg></drop-down-svg>
                                </div>
        
                                <div class="relative ml-3">
                                    <select name="education[{{ $loop->index }}][to_year]"  class="selects">
                                        <option value="">Select Year</option>
                                        @for ($i = 2019; $i > 1980; $i--)
                                            <option value={{ $i }}
                                                    {{ $education->graduation_year == $i ? 'selected' : '' }}>
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                    <drop-down-svg></drop-down-svg>
                                </div>
                            </div>
        
                            @error("education.{{ $loop->index }}.to_month")
                            <p class="text-red text-xs italic">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
    
                        <input type="hidden" name="education[{{ $loop->index }}][edu]" value="{{ $education->id }}">
                    </div>
                
                    @if($loop->first)
                        <hr class="w-full border">
                    @endif
                @endforeach
                {{--<div class="ml-auto mr-3 mb-3">--}}
                    {{--<input class="block px-3 py-4 block border rounded bg-transparent text-grey font-bold hover:bg-grey-lighter" type="button" value=" + Add Another">--}}
                {{--</div>--}}
            </div>


            <!-- Program Details -->
            <div class="flex flex-wrap -mx-3 mb-6 border rounded">
                <div class="section-head">
                    Program Details
                </div>

                <!-- Program -->
                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label for="program" class="labels">
                        Program <span class="text-red">*</span>
                    </label>

                    <div class="relative">
                        <select name="program"  class="selects">
                            <option value="">Select Program</option>
                            @foreach($programs as $program)
                                <option value="{{ $program->id }}"
                                        {{ $form->program->program_id == $program->id ? 'selected' : '' }}>
                                    {{ $program->program }} </option>
                            @endforeach
                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>

                    @error('program')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>

                <!-- Stream -->
                <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                    <label for="stream" class="labels">
                        Stream <span class="text-red">*</span>
                    </label>

                    <div class="relative">
                        <select name="stream"  class="selects">
                            <option value="">Select Stream</option>
                            @foreach($streams as $stream)
                                <option value="{{ $stream->id }}"
                                        {{ $form->program->stream_id == $stream->id ? 'selected' : '' }}>
                                    {{ $stream->stream }} </option>
                            @endforeach

                        </select>
                        <drop-down-svg></drop-down-svg>
                    </div>

                    @error('stream')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>
            </div>


            <!-- Referee Information -->
            <div class="flex flex-wrap -mx-3 mb-6 border rounded">
                <div class="section-head">
                    Referee Information
                </div>
        
                @foreach($form->referee as $referee)
                    <div class="flex flex-wrap border rounded shadow m-3 pt-2">
                        <!-- Title -->
                        <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                            <label for="referee[{{ $loop->index }}][title]" class="labels">
                                Title <span class="text-red">*</span>
                            </label>
                    
                            <div class="relative">
                                <select name="referee[{{ $loop->index }}][title]" class="selects">
                                    <option value="">Select Title</option>
                                    @foreach($titles as $title)
                                        <option value="{{ $title->id }}"
                                                {{ $referee->referee_title_id == $title->id ? 'selected' : '' }}>
                                            {{ $title->title }} </option>
                                    @endforeach
                        
                                </select>
                                <drop-down-svg></drop-down-svg>
                            </div>
                    
                            @error("referee.{{ $loop->index }}.title")
                            <p class="text-red text-xs italic">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
                
                        <!-- Fullname -->
                        <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                            <label for="referee[{{ $loop->index }}][name]" class="labels">
                                Name <span class="text-red">*</span>
                            </label>
                    
                            <input type="text" value="{{ $referee->referee_name }}" name="referee[{{ $loop->index }}][name]" required class="inputs" placeholder="Full Name">
                    
                            @error("referee.{{ $loop->index }}.name")
                            <p class="text-red text-xs italic">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
                
                        <!-- Email -->
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                            <label for="referee[{{ $loop->index }}][email]" class="labels">
                                Email <span class="text-red">*</span>
                            </label>
                    
                            <input type="email" value="{{ $referee->referee_email }}" name="referee[{{ $loop->index }}][email]" required class="inputs" placeholder="example@referee.com">
                    
                            @error("referee.{{ $loop->index }}.email")
                            <p class="text-red text-xs italic">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
                
                        <!-- Phone Number -->
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                            <label for="referee[{{ $loop->index }}][phone]" class="labels">
                                Phone Number <span class="text-red">*</span>
                            </label>
                    
                            <input type="text" value="{{ $referee->referee_phone }}" name="referee[{{ $loop->index }}][phone]" required class="inputs" placeholder="+2347091234567">
                    
                            @error("referee.{{ $loop->index }}.phone")
                            <p class="text-red text-xs italic">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
                
                        <!-- Affiliation -->
                        <div class="w-full px-3 mb-4 md:mb-0">
                            <label for="referee[{{ $loop->index }}][affiliation]" class="labels">
                                Institution/Organization <span class="text-red">*</span>
                            </label>
                    
                            <input type="text" value="{{ $referee->referee_affiliation }}" name="referee[{{ $loop->index }}][affiliation]" required class="inputs" placeholder="African University of Science and Technology">
                    
                            @error("referee.{{ $loop->index }}.affiliation")
                            <p class="text-red text-xs italic">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        </div>
    
                        <input type="hidden" name="referee[{{ $loop->index }}][ref]" value="{{ $referee->id }}">
                    </div>
                    @if($loop->first)
                        <hr class="w-full border">
                    @endif
                @endforeach
    
            </div>

            <!-- Declaration -->
            <div class="flex flex-wrap -mx-3 mb-6 border rounded">
                <div class="section-head">
                    Declaration
                </div>
                <div class="block text-justify px-3 py-3 uppercase tracking-wide leading-normal text-xs font-bold">
                    I confirm that the information I have provided in this form is true, complete and accurate and no information or other information has been omitted. I acknowledge and that know that providing false information grant African University of Science and Technology the right to cancel my application and grounds for dismissal from the University.
                    <input type="checkbox" value="{{ old('declaration') }}" name="declaration"  value="" required>
                </div>
            </div>


            <!-- Submit -->
            <div class="flex flex-wrap -mx-3 mb-6 justify-center">
                <input class="block px-3 py-4 block uppercase tracking-wide  rounded bg-blue text-white font-bold hover:bg-blue-dark" type="submit" value="Next">
            </div>
        </form>
    </div>
@endsection