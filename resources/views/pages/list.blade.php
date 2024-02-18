@extends('master.main')

@section('content')

<div class="container">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-start">
                <h4>list of students</h4>
                <a href="{{ url('lists/create') }}" class="btn btn-primary ms-3 px-3">Add new</a>
            </div>
            <div class="card-body">

                @if (session()->get('success'))
                    <p class="alert alert-info">{{ session()->get('success') }}</p>
                @endif

                <table class="table table-hover table-stripped">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Grade</th>
                            <th>E-mail</th>
                            <th>Created AT</th>
                            <th>Updated AT</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ( $user as $db_table )
                        <tr>
                            <td>{{ $db_table->id }}</td>
                            <td>{{ $db_table->name }}</td>
                            <td>{{ $db_table->age }}</td>
                            <td>{{ $db_table->grade }}</td>
                            <td>{{ $db_table->email }}</td>
                            <td>{{ $db_table->created_at }}</td>
                            <td>{{ $db_table->updated_at }}</td>
                            <td> 
                                <a href="{{ url("/user/$db_table->id/show") }}" class="btn btn-outline-warning">Show</a> 
                                <a href="{{ url("/user/$db_table->id/edit") }}" class="btn btn-outline-info">Edit</a> 
                                <a href="#" class="btn btn-outline-danger"
                                    onclick="
                                    document.getElementById('delete-{{ $db_table->id }}').submit();
                                    "
                                    >Delete</a>
                                    
                                    <form id="delete-{{ $db_table->id }}" action="{{ url("/user/$db_table->id/delete") }}" method="post">
                                    @csrf
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection