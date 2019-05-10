@extends('layouts.app')

@section('title', 'Admission Form')

@section('content')
<div class="flex flex-col items-center">
    <form class="w-full max-w-md" action="">
        <!-- Personal Details -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Personal Details
            </div>
            
            <!-- Last Name -->
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="lastname" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Last Name <span class="text-red">*</span>
                </label>
    
                <input type="text" name="lastname" id="lastname" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="Last Name">
    
                @error('lastname')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- First Name -->
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="firstname" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    First Name <span class="text-red">*</span>
                </label>
    
                <input type="text" name="firstname" id="firstname" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="First Name">
    
                @error('firstname')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
    
            <!-- Middle Name -->
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="middlename" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Middle Name</label>
                <input type="text" name="middlename" id="middlename" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="Middle Name">
                @error('middlename')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
    
            <!-- Gender -->
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="gender" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Gender <span class="text-red">*</span>
                </label>
    
                <div class="relative">
                    <select name="gender" id="gender" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
    
                @error('gender')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Marital Status -->
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="marital_status" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Marital Status <span class="text-red">*</span>
                </label>
    
                <div class="relative">
                    <select name="marital_status" id="marital_status" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Marital Status</option>
                        @foreach($marital_statuses as $marital)
                            <option value="{{ $marital->id }}"> {{ $marital->marital_status }} </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
    
                @error('marital_status')
                    <p class="text-red text-xs italic">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
    
            <!-- Date of Birth -->
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="date_of_birth" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Date of Birth <span class="text-red">*</span>
                </label>
    
                <div class="relative">
                    <select name="date_of_birth" id="date_of_birth" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Date of Birth</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
    
                @error('date_of_birth')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Nationality -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="nationality" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Nationality <span class="text-red">*</span>
                </label>
        
                <div class="relative">
                    <select name="nationality" id="nationality" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Nationality</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}"> {{ $country->country }} </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
        
                @error('nationality')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- State -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="state" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    State (Nigerians only) <span class="text-red">*</span>
                </label>
        
                <div class="relative">
                    <select name="state" id="state" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select State</option>
                        @foreach($states as $state)
                            <option value="{{ $state->id }}"> {{ $state->state }} </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
        
                @error('state')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Disability -->
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="disability" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Disability <span class="text-red">*</span>
                </label>
    
                <div class="relative">
                    <select name="disability" id="disability" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Disability</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
    
                @error('disability')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Disability Details -->
            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                <label for="disability_details" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">If Yes, Specify Disability</label>
                <input type="text" name="disability_details" id="disability_details" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="Specify Disability">
                @error('disability_details')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
        </div>
    
        
        <!-- Contact Details -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Contact Details
            </div>
    
            <!-- Email -->
            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                <label for="email" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Email <span class="text-red">*</span>
                </label>
        
                <input type="text" name="email" id="email" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="example@gmail.com">
        
                @error('email')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Mobile Number -->
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="mobile_number" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Mobile Number <span class="text-red">*</span>
                </label>
        
                <input type="text" name="mobile_number" id="mobile_number" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="+2347031234567">
        
                @error('mobile_number')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Address -->
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="address" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Address
                </label>
        
                <input type="text" name="address" id="address" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="Km 10 Airport Road, Galadimawa">
        
                @error('address')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
            
            <!-- Country of Residence -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="country_of_residence" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Country of Residence <span class="text-red">*</span>
                </label>
        
                <div class="relative">
                    <select name="country_of_residence" id="country_of_residence" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Country of Residence</option>
                        <option value="NG">Nigeria</option>
                        <option value="OT">Others</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
        
                @error('country_of_residence')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- State of Residence -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="state_of_residence" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    State (Nigerians only) <span class="text-red">*</span>
                </label>
        
                <div class="relative">
                    <select name="state_of_residence" id="state_of_residence" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select State</option>
                        <option value="1">Abia</option>
                        <option value="2">Enugu</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
        
                @error('state_of_residence')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- City/Town -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="city" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    City/Town <span class="text-red">*</span>
                </label>
        
                <input type="text" name="city" id="city" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="Accra">
        
                @error('city')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Zip Code -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="zip_code" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Zip Code
                </label>
        
                <input type="text" name="zip_code" id="zip_code" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="90210">
        
                @error('zip_code')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
        </div>
        
        
        <!-- Educational Background -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Educational History
            </div>
    
            <!-- Institution -->
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="institution" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Institution and Location <span class="text-red">*</span>
                </label>
        
                <input type="text" name="institution" id="institution" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="African University of Science and Technology, Abuja">
        
                @error('institution')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Degree -->
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="degree" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Degree <span class="text-red">*</span>
                </label>
        
                <div class="relative">
                    <select name="degree" id="degree" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Degree</option>
                        <option value="Bachelors">Bachelors</option>
                        <option value="Masters">Masters</option>
                        <option value="doctorate">Doctorate</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
        
                @error('degree')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
            
            <!-- Course of Study -->
            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                <label for="course_of_study" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Course of Study <span class="text-red">*</span>
                </label>
        
                <input type="text" name="course_of_study" id="course_of_study" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="Computer Science">
        
                @error('course_of_study')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- From -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="from_month" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Start Date <span class="text-red">*</span>
                </label>
        
                <div class="flex">
                    <div class="relative">
                        <select name="from_month" id="from_month" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                        </select>
                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
        
                    <div class="relative ml-3">
                        <select name="from_year" id="from_year" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                            <option value="">Select Year</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                        </select>
                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
        
                @error('from_month')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- To -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="to_month" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Graduation Date <span class="text-red">*</span>
                </label>
        
                <div class="flex">
                    <div class="relative">
                        <select name="to_month" id="to_month" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                        </select>
                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
            
                    <div class="relative ml-3">
                        <select name="to_year" id="to_year" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                            <option value="">Select Year</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                        </select>
                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
        
                @error('to_month')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <hr class="w-full border">
            
            <div class="ml-auto mr-3 mb-3">
                <input class="block px-3 py-4 block border rounded bg-transparent text-grey font-bold hover:bg-grey-lighter" type="button" value=" + Add Another">
            </div>
        </div>
        
        
        <!-- Program Details -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Program Details
            </div>
    
            <!-- Program -->
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="program" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Program <span class="text-red">*</span>
                </label>
        
                <div class="relative">
                    <select name="program" id="program" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Program</option>
                        <option value="M.Sc">Master of Science</option>
                        <option value="Ph.D">Doctor of Philosophy</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
        
                @error('program')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Stream -->
            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                <label for="stream" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Stream <span class="text-red">*</span>
                </label>
        
                <div class="relative">
                    <select name="stream" id="stream" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Stream</option>
                        @foreach($streams as $stream)
                            <option value="{{ $stream->id }}"> {{ $stream->stream }} </option>
                        @endforeach


                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
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
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Referee Information
            </div>
    
            <!-- Title -->
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <label for="referee_title" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Title <span class="text-red">*</span>
                </label>
        
                <div class="relative">
                    <select name="referee_title" id="referee_title" class="block appearance-none w-full shadow border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Title</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Dr">Dr</option>
                        <option value="Prof">Prof</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
        
                @error('referee_title')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Fullname -->
            <div class="w-full md:w-2/3 px-3 mb-4 md:mb-0">
                <label for="referee_name" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Name <span class="text-red">*</span>
                </label>
        
                <input type="text" name="referee_name" id="referee_name" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="Full Name">
        
                @error('referee_name')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Email -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="referee_email" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Email <span class="text-red">*</span>
                </label>
        
                <input type="email" name="referee_email" id="referee_email" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="example@referee.com">
        
                @error('referee_email')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Phone Number -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label for="referee_phone" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Phone Number <span class="text-red">*</span>
                </label>
        
                <input type="text" name="referee_phone" id="referee_phone" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="+2347091234567">
        
                @error('referee_phone')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <!-- Affiliation -->
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="referee_affiliation" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Institution/Organization <span class="text-red">*</span>
                </label>
        
                <input type="text" name="referee_affiliation" id="referee_affiliation" required class="appearance-none block w-full shadow
                       text-grey-darker border rounded py-3 px-4 mb-3
                       leading-tight focus:outline-none focus:bg-white" placeholder="African University of Science and Technology">
        
                @error('referee_affiliation')
                <p class="text-red text-xs italic">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
    
            <hr class="w-full border">
            
            <div class="ml-auto mr-3 mb-3">
                <input class="block px-3 py-4 block border rounded bg-transparent text-grey font-bold hover:bg-grey-lighter" type="button" value=" + Add Another">
            </div>
        </div>
        
        
        <!-- Documents -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Documents
            </div>
    
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="referee_title" class="uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Passport photograph <span class="text-red">*</span>
                </label>
                
                <input class="mb-3 text-grey-dark px-3 py-4" type="file" name="passport" id="passport" required>
            </div>
    
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="referee_title" class="uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Statement of purpose <span class="text-red">*</span>
                </label>
                
                <input class="mb-3 text-grey-dark px-3 py-4" type="file" name="purpose_statement" id="purpose_statement" required>
            </div>
    
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="referee_title" class="uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Statement of Results <span class="text-red">*</span>
                </label>
                
                <input class="mb-3 text-grey-dark px-3 py-4" type="file" name="result_statement" id="result_statement" required>
            </div>
    
            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="referee_title" class="uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Academic Transcript <span class="text-red">*</span>
                </label>
                
                <input class="mb-3 text-grey-dark px-3 py-4" type="file" name="transcript" id="transcript" required>
            </div>

            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="referee_title" class="uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Reference Leter <span class="text-red">*</span>
                </label>

                <input class="mb-3 text-grey-dark px-3 py-4" type="file" name="rletter" id="rletter" required>
            </div>


            <div class="w-full px-3 mb-4 md:mb-0">
                <label for="proposal" class="uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                    Research Proposal
                </label>
                
                <input class="mb-3 text-grey-dark px-3 py-4" type="file" name="proposal" id="proposal">
            </div>
        </div>
        
        
        <!-- Declaration -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Declaration
            </div>
            <div class="block text-justify px-3 py-3 uppercase tracking-wide leading-normal text-xs font-bold">
                I confirm that the information I have provided in this form is true, complete and accurate and no information or other information has been omitted. I acknowledge and that know that providing false information grant African University of Science and Technology the right to cancel my application and grounds for dismissal from the University.
                <input type="checkbox" name="declaration" id="declaration" value="" required>
            </div>
        </div>
        
        
        <!-- Submit -->
        <div class="flex flex-wrap -mx-3 mb-6 justify-center">
            <input class="block px-3 py-4 block uppercase tracking-wide  rounded bg-blue text-white font-bold hover:bg-blue-dark" type="submit" value="Submit">
        </div>
    </form>
</div>
@endsection
