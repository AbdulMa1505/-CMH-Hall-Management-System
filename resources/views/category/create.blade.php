@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">CMH ADMIN PORTAL 
                        <a href="{{ url('category/create') }}" class="btn btn-danger float-end">BACK</a>
                    </h1>
                </div>
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf <!-- Include CSRF token for security -->
                        <div class="mb-3">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" class="form-control" required>
                           @error('first_name')<span class="text-danger">({message})@enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" required>
                            @error('last_name')<span class="text-danger">({message})@enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="">Gender</label>
                            <select name="gender" id="" class="form-control" required>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                            @error('gender')<span class="text-danger">({message})@enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                            @error('email')<span class="text-danger">({message})@enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" required>
                            @error('phone_number')<span class="text-danger">({message})@enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="">Program</label>
                            <input type="text" name="program" class="form-control" required>
                            @error('program')<span class="text-danger">({message})@enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="">Residency</label>
                            <div>
                                <input type="radio" name="residency" value="resident" id="resident" required>
                                <label for="resident">Resident</label>
                            </div>
                            <div>
                                <input type="radio" name="residential_stauts" value="non_resident" id="non_resident">
                                <label for="non_resident">Non-Resident</label>
                            </div>
                            @error('resident')<span class="text-danger">({message})@enderror</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
