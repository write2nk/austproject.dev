<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>austapplication</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #A02E16;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                /*margin-bottom: 120px;*/
                color:#A02E16;
            }
            .app_guideline{
                width: 980px;
                height: auto;
                border: 0.5px solid #A02E16;
                margin: auto;
                padding-left: 20px;
                padding-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    AUST Application
                </div>
            </div>
        </div>
    <div class = "app_guideline">
        <p>welcome to AUST Application System</p>
        <p> This page provides you with the basic information you would need for your application
        We strongly recommend that you have the following information ready as at your time of application</p>
        <ul>
            <li><b>Statement of purpose:</b> You are expected to provide a one page summary of your reason for selecting the course for which
            you are applying for. You should include your interest and experience in this subject area, your reason for choosing the particular
            course and AUST, your aim/career plan and how the course of study connects your future plan</li>
            <li> Statement of Results</li>
            <li>Academic Transcript</li>
            <li>Passport photograph: It must not be more than 1MB and must be in jpg or jpeg format</li>
            <li>Research Proposal: for PhD candidates only</li>
            <li>Atleast 2 Reference </li>
        </ul>

    </div>
    </body>
</html>
