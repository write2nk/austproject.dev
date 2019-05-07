@extends('layouts.app')

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
    
                <input type="text" name="lastname" id="lastname" required class="appearance-none block w-full bg-grey-lighter
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
    
                <input type="text" name="firstname" id="firstname" required class="appearance-none block w-full bg-grey-lighter
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
                <input type="text" name="middlename" id="middlename" required class="appearance-none block w-full bg-grey-lighter
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
                    <select name="gender" id="gender" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
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
                    <select name="marital_status" id="marital_status" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Marital Status</option>
                        <option value="1">Single</option>
                        <option value="2">Married</option>
                        <option value="3">Divorced</option>
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
                    <select name="date_of_birth" id="date_of_birth" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
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
                    <select name="nationality" id="nationality" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select Nationality</option>
                        <option value="NG">Nigeria</option>
                        <option value="OT">Others</option>
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
                    <select name="state" id="state" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option value="">Select State</option>
                        <option value="1">Abia</option>
                        <option value="2">Enugu</option>
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
                    <select name="disability" id="disability" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
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
                <input type="text" name="disability_details" id="disability_details" required class="appearance-none block w-full bg-grey-lighter
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
        
                <input type="text" name="email" id="email" required class="appearance-none block w-full bg-grey-lighter
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
        
                <input type="text" name="mobile_number" id="mobile_number" required class="appearance-none block w-full bg-grey-lighter
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
        
                <input type="text" name="address" id="address" required class="appearance-none block w-full bg-grey-lighter
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
                    <select name="country_of_residence" id="country_of_residence" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
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
                    <select name="state_of_residence" id="state_of_residence" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
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
        
                <input type="text" name="city" id="city" required class="appearance-none block w-full bg-grey-lighter
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
        
                <input type="text" name="zip_code" id="zip_code" required class="appearance-none block w-full bg-grey-lighter
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
                Educational Background
            </div>
            
        </div>
        
        <!-- Program Details -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Program Details
            </div>
    
        </div>
        
        <!-- Referee Information -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Referee Information
            </div>
    
        </div>
        
        <!-- Documents -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Documents
            </div>
    
        </div>
        
        <!-- Declaration -->
        <div class="flex flex-wrap -mx-3 mb-6 border rounded">
            <div class="bg-grey-lighter w-full block uppercase tracking-wide text-xs text-grey-darker font-bold  py-4 px-3 mb-2">
                Declaration
            </div>
    
        </div>
        
        <!-- Submit -->
    </form>
    
    
    
    
    
    <form action="" method = "">
        <fieldset>
            <legend>Educational Background</legend>
            <p>Please list all academic qualififcations in chronological order. Evidence of your qualification yo have
                completed muct be submitted with this application</p>
            From date: <input type ="date" name = "startdate" required><br>
            End date: <input type="date" name = "enddate"><br>
            Institution name*: <input type="text"name ="institution" required><br>
            Degree: <select name ="degree" >
                <option value="HND">HND</option>
                <option value="B.Sc">B.SC</option>
                <option value="Msc">MSc</option>
            </select><br>
            Country: <select name ="institutioncountry" required>
                <option value="select">Please select</option>
                <option value="niger">Niger</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Program of study</legend>
            Program of study*:<input type="radio" name="program" value="Msc"required>M.Sc
            <input type="radio" name="program" value="Phd"required>PhD<br>

            Select program of choice: <select name ="programchoice">
                <option value ="pleaseselect">Please Select</option>
                <option value ="appliedstatistics">Applied Statistics</option>
                <option value ="aerospace">Aerospace Engineering</option>
                <option value ="ComputerScience">Computer Science</option>
                <option value ="Geoinformatics">Geoinformatics</option>
                <option value ="mit">management Information Technology</option>
                <option value ="materialsScience">Materials Science & Engineering</option>
                <option value ="petroleumengineering">Petroleum Engineering</option>
                <option value ="mathematicalmodeling">Mathematical Modeling</option>
                <option value ="publicpolicy">Public policy</option>
                <option value ="pureandappliedmathematics">Pure & Applied Mathematics</option>
                <option value ="spacephysics">Space Physics</option>
                <option value ="systemengineering">System Engineering</option>
                <option value ="pleaseselect">Theoretical & Applied Phyics</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Referee Information </legend>
          <p>  You are expected to provide atleast two  references. Ensure that the information you enter is correct as
            they would be used to contact your reference.</p>
            Title: <select name ="title">
                <option value="mr">Mr</option>
                <option value="mrs">Mrs</option>
                <option value="dr">Dr.</option>
                <option value="prof">Prof</option>
            </select><br>

            Full Name*: <input type="text" name="fullname" required><br>
            Email*: <input type="email" name="email" required><br>
            Phone number: <input type="tel" required><br>
            Institution/Organization*: <input type="text" name="institution">
        </fieldset>

        <fieldset>
            <legend>Documents uploads</legend>
            Passport photograph*: <input type="file" name="resultsstatement"required><br>
            Statement of purpose*: <input type="file" name="sop" required><br>
            Statement of Results*: <input type="file" name="resultsstatement"required><br>
            Academic Transcript*: <input type="file" name="transcript"required><br>
            Research Proposal: <input type="file" name="Rproposal">
        </fieldset>
        <fieldset>
            <legend>Declaration</legend>
            <p> By clicking Agree, I confirm that the information I have provided in this form is true, complete and accurate
            and no information or other infromation has been omitted</p>
            <p>I acknowledge that knowing, providing false information gives AUST the right to cancel the application and grounds for
            dismissal from the University</p>
            <input type="checkbox" name="aggree" value="Iagree" required> I agree
        </fieldset>
        <input type="submit" name ="submit" value = "Submit">
    </form>
</div>
@endsection
