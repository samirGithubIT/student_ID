@extends('master.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-10 m-auto mt-5 py-4">
            <div class="card">
                <div class="card-header">
                    <h2>Create a new Student</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('lists/store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Enter your Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Enter your age</label>
                            <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}">

                            @error('age')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        <div class="mb-3">
                            <label for="grade" class="form-label">Enter your grade</label>
                            <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade') }}">

                            @error('grade')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Enter your E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">

                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        <div class="mb-3">
                            <label for="father_name" class="form-label">Enter your father_name</label>
                            <input type="text" class="form-control" id="father_name" name="father_name" value="{{ old('father_name') }}">

                            @error('father_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        <div class="mb-3">
                            <label for="mother_name" class="form-label">Enter your mother_name</label>
                            <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{ old('mother_name') }}">

                            @error('mother_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                          </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Enter your address</label>
                            <textarea class="form-control" id="address" name="address" value="{{ old('address') }}"> </textarea>
                          </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Attach your photo</label>
                            <input type="file" class="form-control" id="photo">
                          </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Enter your password</label>
                            <input type="password" class="form-control" id="password" name="password">
                          </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Confirm your password</label>
                            <input type="password" class="form-control" id="password" name="password_confirmation">
                          </div>
                        <button class="btn btn-outline-primary" type="submit" >submit</button>
                        <a href="{{ url('/lists') }}" class="btn btn-secondary">back to list</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection