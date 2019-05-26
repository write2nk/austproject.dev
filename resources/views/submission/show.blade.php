@extends('layouts.app')

@section('title', 'Application Summary')
@section('content')
    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6 w-full mt-0">
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr>
                        <th class="table-data" colspan="2">
                            Personal Details</th>
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <td class="table-data">Last Name:</td>
                        <td class="table-data">
                            {{ _('Odu Nkiruka') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">First Name:</td>
                        <td class="table-data">
                            {{ _('Nkiruka') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Middle Name:</td>
                        <td class="table-data">
                            {{ _('Bridget') }}
                        </td>
                    </tr>
        
                    <tr>
                        <td class="table-data">Gender:</td>
                        <td class="table-data">
                            {{ _('Female') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Marital Status:</td>
                        <td class="table-data">
                            {{ _('Married') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Date of Birth:</td>
                        <td class="table-data">
                            {{ _('12/05/2010') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Nationality:</td>
                        <td class="table-data">
                            {{ _('Nigeria') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">State of Origin:</td>
                        <td class="table-data">
                            {{ _('Akwa Ibom') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Disability:</td>
                        <td class="table-data">
                            {{ _('No') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Disability Details:</td>
                        <td class="table-data">
                            {{ _('None') }}
                        </td>
                    </tr>
                </tbody>
                
                <thead>
                    <tr>
                        <th class="table-data" colspan="2">
                            Contact Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-data">Email:</td>
                        <td class="table-data">
                            {{ _('nodu@aust.edu.ng') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Phone:</td>
                        <td class="table-data">
                            {{ _('+2348162094555') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Address:</td>
                        <td class="table-data">
                            {{ _('11 Enugu Road, abia') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Country of Residence:</td>
                        <td class="table-data">
                            {{ _('America') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">State of Residence:</td>
                        <td class="table-data">
                            {{ _('Lagos') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Zip Code:</td>
                        <td class="table-data">
                            {{ _('90001') }}
                        </td>
                    </tr>
                </tbody>
                
                <thead>
                    <tr>
                        <th class="table-data" colspan="2">
                            Education History</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-data">Institution :</td>
                        <td class="table-data">
                            {{ _('AUST') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Course:</td>
                        <td class="table-data">
                            {{ _('Computer') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Start Month:</td>
                        <td class="table-data">
                            {{ _('February') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Start Year:</td>
                        <td class="table-data">
                            {{ _('2007') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Graduation Month:</td>
                        <td class="table-data">
                            {{ _('April') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Graduation year:</td>
                        <td class="table-data">
                            {{ _('2007') }}
                        </td>
                    </tr>
                </tbody>
                
                <thead>
                    <tr>
                        <th class="table-data" colspan="2">
                            Program Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-data">Program:</td>
                        <td class="table-data">
                            {{ _('PhD') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Stream:</td>
                        <td class="table-data">
                            {{ _('GIS and Information Technology') }}
                        </td>
                    </tr>
                </tbody>
                
                <thead>
                    <tr>
                        <th class="table-data" colspan="2">
                            Referee Information</th>
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <td class="table-data">Referee Name:</td>
                        <td class="table-data">
                            {{ _('Ifeanyi Oko') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Referee Email:</td>
                        <td class="table-data">
                            {{ _('ifeanyioko@gmail.com') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Referee Phone:</td>
                        <td class="table-data">
                            {{ _('+2345678987') }}
                        </td>
                    </tr>
                    <tr>
                        <td class="table-data">Referee Affiliation:</td>
                        <td class="table-data">
                            {{ _('BUK Kano') }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection