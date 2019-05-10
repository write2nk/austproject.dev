<!doctype html>
<html class="" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ config('app.name', 'Application Login') }}</title>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="">
        <div class="container">
            <!-- Header -->
            <div class="flex items-center h-32">
                <img src="{{ asset('images/aust-logo.png') }}" alt="AUST Logo">
                <img src="{{ asset('images/v_bar.png') }}" alt="Vertical Bar" class="w-2 h-16">
                <span class="text-4xl font-black text-red-dark ml-5">ADMISSIONS</span>
            </div>
    
            <div class="mt-10">
                <span class="text-3xl font-bold ml-5">
                    Application Instructions
                </span>
            
                <img src="{{ asset('images/h_bar.png') }}" alt="Vertical Bar" class="h-1 w-full">
                <div class="m-5 leading-normal text-lg">
                    <h3>Welcome to AUST Application System</h3>
                    <p> This page provides you with the basic information you would need for your application. We strongly recommend that you have the following information ready as at your time of application</p>
                    <ul>
                        <li>Statement of purpose: You are expected to provide a one page summary of your reason for selecting the course for which
                        you are applying for. You should include your interest and experience in this subject area, your reason for choosing the particular
                        course and AUST, your aim/career plan and how the course of study connects your future plan</li>
                        <li> Statement of Results</li>
                        <li>Academic Transcript</li>
                        <li>Passport photograph: It must not be more than 1MB and must be in jpg or jpeg format</li>
                        <li>Research Proposal: for PhD candidates only</li>
                        <li>Atleast Two Reference: You are expected to download the reference form from <a href="https://aust.edu.ng/admission/reference-form-for-postgraduate-program">here</a> and then
                        upload it during your application</li>
                        <li>You are expected to merge and submit all your documents as one file, you can follow this <a href="https://pdfjoiner.com/">Link
                           </a>  to join your pdf files.</li>
                        <li>Your documents must be merged in the following order:</li>
                        <ol type="1">
                            <li>Passport Photograph</li>
                            <li>Statement of Results</li>
                            <li> Academic Transcript</li>
                            <li>Statement of Purpose</li>
                            <li> Research proposal (for PhD only) </li>
                        </ol>
                       <li>If you are a returning user, select login to continue</li>
                       <li>If you are first time user, select create account. </li>
                    </ul>
                </div>
                
                <div class="flex item-center justify-center mb-10">
                    <a class="no-underline block bg-grey px-4 py-4 rounded hover:bg-grey-darker" href="{{ route('login') }}">Login</a>
                    <a class="no-underline block bg-grey px-3 py-4 rounded hover:bg-grey-darker ml-5" href="{{ route('register') }}">Create Account</a>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="flex flex-col sticky pin-b">
                <img src="{{ asset('images/h_bar.png') }}" alt="Vertical Bar" class="h-1 w-full">
                <div class="flex items-center justify-center mt-3">
                    <a class="no-underline" href="https://aust.edu.ng/">AUST Home Page</a>
                    <a class="no-underline ml-5" href="https://aust.edu.ng/admission/regular-m-sc-phd/eligibility-for-admission">Eligibility for Admission</a>
                </div>
            </div>
        </div>
    </body>
</html>
