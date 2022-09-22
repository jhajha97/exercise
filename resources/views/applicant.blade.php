<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
       
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
     
            <br><br>
            <center><h1>Applicant Records</h1></center>

     <a href="{{ url('add-record') }}" >Add New Record</a>
              
                            <table>
                            <thead>
                                <tr>
                                   <th>#</th>
                                   <th>First Name</th>
                                   <th>Middle Name</th>
                                   <th>Last Name</th>
                                   <th>Birthdate</th>
                                   <th>Gender</th>
                                   <th>Last Name</th>
                                   <th>Cellphone #</th>
                                   <th>Address</th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($applicants as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->first_name }}</td>
                                        <td>{{ $data->middle_name }}</td>
                                        <td>{{ $data->last_name }}</td>
                                        <td>{{ $data->birthdate }}</td>
                                        <td>{{ $data->gender }}</td>
                                        <td>{{ $data->cellphone_no }}</td>
                                        <td>{{ $data->address }}</td>

                                        <td>

                             <a href="{{ url('edit-record/'. $data->id) }}"> Edit</a>
                            <a href="{{ url('delete-record/'. $data->id) }}"> Delete</a>

                                        </form>
                                        </td>
                                    </tr>
                             
                                </tbody>
                                   @empty
                                    <h2> No Applicant Record </h2>
                                @endforelse
                            </table>
       
    </body>
</html>
