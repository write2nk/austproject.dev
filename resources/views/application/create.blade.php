@extends('layouts.app')

@section('content')
    <form action="" method = "">
        <fieldset>
            <legend> Personal Details</legend>
      First Name*: <input type="text" name = "firstname" ><br>
            Middle Name: <input type = "text" name = "middlename"><br>
        Last Name*: <input type = "text" name = "lastname"><br>
            Gender*: <input type="radio" name = "gender" value=" male"> Male
            <input type="radio" name="gender" value = "female"> Female<br>

            Marital status*: <select name = "maritalstatus" >
                <option value="default">Please select</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value = "divorced">divorced</option>
            </select><br>
            Date of Birth*: <input type="date" name ="dob"><br>

            Nationality*: <select name = "nationality">
                <option value ="selectcountry">select country</option>
                <option value = "nigeria">Nigeria</option>
            </select><br>

            State of Origin(for Nigerians only)
            <select>
                <option value = "selectstate">Select state</option>
                <option>Enugu</option>
            </select><br>
            Do you have any disability* <input type="radio" name="disability" value = "yes"> Yes
            <input type="radio" name="disability" value = "no"> No<br>

        </fieldset>

        <fieldset>
            <legend>Contact Details</legend>
            Email*: <input type="email" name ="email"><br>
            Mobile Number: <input type="text" name = "number"><br>
            Country of Residence <select>
                <option> Select country</option>
                <option>Rwanda</option>
            </select><br>
            State of Residence(if selected Nigeria): <select>
                <option value="sor">Select state</option>
                <option value="fct">FCT</option>
            </select><br>
            City/Town: <input type="text">
            Zip code: <input type="number" name = "zipcode"><br>
            Address: <input type="text" name="address">
        </fieldset>

        <fieldset>
            <legend>Educational Background</legend>
            <p>Please list all academic qualififcations in chronological order. Evidence of your qualification yo have
                completed muct be submitted with this application</p>
            From date: <input type ="date" name = "startdate"><br>
            End date: <input type="date" name = "enddate"><br>
            Institution name : <input type="text"name ="institution"><br>
            Degree: <select name ="degree">
                <option value="HND">HND</option>
                <option value="B.Sc">B.SC</option>
                <option value="Msc">MSc</option>
            </select><br>
            Country: <select>
                <option value="select">Please select</option>
                <option value="niger">Niger</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Program of study</legend>
            Program of study <input type="radio" name="program" value="Msc">M.Sc
            <input type="radio" name="program" value="Phd">PhD<br>

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

            Full Name*: <input type="text" name="fullname"><br>
            Email: <input type="email" name="email"><br>
            Phone number: <input type="text"><br>
            Institution/Organization*: <input type="text" name="institution">

        </fieldset>
    </form>
@endsection