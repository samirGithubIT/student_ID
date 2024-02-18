@extends('master.main')

@section('content')

<div class="container">
    <div class="row mt-5 py-3">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <h3>Data of <span class="text-primary">{{ $user->name }}</span></h3>     
                </div>
                <div class="card-body">
                    <table class="table-hover table-danger">
                        <tr>
                            <th>SL.</th>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Age:</th>
                            <td>{{ $user->age }}</td>
                        </tr>
                        <tr>
                            <th>Grade:</th>
                            <td>{{ $user->grade }}</td>
                        </tr>
                        <tr>
                            <th>E-mail:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Father Name:</th>
                            <td>{{ $user->father_name }}</td>
                        </tr>
                        <tr>
                            <th>Mother Name:</th>
                            <td>{{ $user->mother_name }}</td>
                        </tr>
                        <tr>
                            <th>Address(optional):</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <th>photo(optional):</th>
                            <td>{{ $user->photo }}</td>
                        </tr>
                        <tr>
                            <th>Password:</th>
                            <td>{{bcrypt( $user->password) }}</td>
                        </tr>
                        <tr>
                            <th>Created At:</th>
                            <td>{{ date('d-F-Y h:i a',strtotime($user->created_at)) }}</td>
                        </tr>
                        <tr>
                            <th>Update At:</th>
                            <td>{{ date('d-F-Y h:i a', strtotime($user->updated_at)) }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection