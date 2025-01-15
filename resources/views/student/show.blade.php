@extends('layouts.frontend')

@section('content')
<div class="container" style="background-color: black; color: white; padding: 20px; border-radius: 10px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #111; border: none; color: white;">
                <div class="card-header" style="background-color: #FFD700; color: black; text-align: center; padding: 15px; border-radius: 10px 10px 0 0;">
                    <h2>CMH Management Portal</h2>
                    <a href="{{ url('student') }}" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body" style="padding: 20px;">
                    <div class="mb-3">
                        <label for="first_name" class="form-label" style="color: #FFD700;">First Name</label>
                        <p class="form-control" style="background-color: black; color: white; border: 1px solid #FFD700;">{{ $student->first_name }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label" style="color: #FFD700;">Last Name</label>
                        <p class="form-control" style="background-color: black; color: white; border: 1px solid #FFD700;">{{ $student->last_name }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label" style="color: #FFD700;">Gender</label>
                        <p class="form-control" style="background-color: black; color: white; border: 1px solid #FFD700;">{{ ucfirst($student->gender) }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: #FFD700;">Email</label>
                        <p class="form-control" style="background-color: black; color: white; border: 1px solid #FFD700;">{{ $student->email }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label" style="color: #FFD700;">Phone Number</label>
                        <p class="form-control" style="background-color: black; color: white; border: 1px solid #FFD700;">{{ $student->phone_number }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="program" class="form-label" style="color: #FFD700;">Program</label>
                        <p class="form-control" style="background-color: black; color: white; border: 1px solid #FFD700;">{{ $student->program }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="residential_status" class="form-label" style="color: #FFD700;">Residency Status</label>
                        <p class="form-control" style="background-color: black; color: white; border: 1px solid #FFD700;">{{ ucfirst(str_replace('_', ' ', $student->residential_status)) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
