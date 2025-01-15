@extends('layouts.frontend')

@section('content')
<div class="container" style="background-color: black; color: white; min-height: 100vh; padding: 2rem;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header bg-warning text-black text-center">
                    <h2>CMH Management Portal</h2>
                    <a href="{{ url('student') }}" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf <!-- Included CSRF token for security -->
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control bg-dark text-white" placeholder="Enter your first name" required>
                            @error('first_name')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control bg-dark text-white" placeholder="Enter your last name" required>
                            @error('last_name')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" class="form-control bg-dark text-white" required>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                            @error('gender')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control bg-dark text-white" placeholder="Enter your email address" required>
                            @error('email')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control bg-dark text-white" placeholder="Enter your phone number" required>
                            @error('phone_number')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="program" class="form-label">Program</label>
                            <select name="program" class="form-control bg-dark text-white" required>
                                <option value="" disabled selected>Select Program</option>
                                <option value="" disabled selected>Select Program</option>
                                <!-- Faculty of Mining and Minerals Technology -->
                                <option value="BSc Mining Engineering">BSc Mining Engineering</option>
                                <option value="BSc Minerals Engineering">BSc Minerals Engineering</option>
                                <!-- Faculty of Engineering -->
                                <option value="BSc Mechanical Engineering">BSc Mechanical Engineering</option>
                                <option value="BSc Electrical and Electronic Engineering">BSc Electrical and Electronic Engineering</option>
                                <option value="BSc Renewable Energy Engineering">BSc Renewable Energy Engineering</option>
                                <option value="BSc Computer Science and Engineering">BSc Computer Science and Engineering</option>
                                <option value="BSc Mathematics">BSc Mathematics</option>
                                <option value="Diploma in Plant and Maintenance Engineering">Diploma in Plant and Maintenance Engineering</option>
                                <option value="Diploma in Electrical and Electronic Engineering">Diploma in Electrical and Electronic Engineering</option>
                                <!-- Faculty of Computing and Mathematical Sciences -->
                                <option value="BSc Cyber Security">BSc Cyber Security</option>
                                <option value="BSc Information Systems and Technology">BSc Information Systems and Technology</option>
                                <option value="BSc Statistical Data Science">BSc Statistical Data Science</option>
                                <!-- Faculty of Integrated Management Studies -->
                                <option value="BSc Logistics and Transport Management">BSc Logistics and Transport Management</option>
                                <option value="BSc Economics and Industrial Organization">BSc Economics and Industrial Organization</option>
                                <!-- Faculty of Geosciences and Environmental Studies -->
                                <option value="BSc Geomatic Engineering">BSc Geomatic Engineering</option>
                                <option value="BSc Geological Engineering">BSc Geological Engineering</option>
                                <option value="BSc Spatial Planning">BSc Spatial Planning</option>
                                <option value="BSc Environmental and Safety Engineering">BSc Environmental and Safety Engineering</option>
                                <option value="BSc Land Administration and Information Systems">BSc Land Administration and Information Systems</option>
                                <option value="Diploma in General Drilling">Diploma in General Drilling</option>
                                <!-- School of Petroleum Studies -->
                                <option value="BSc Petroleum Engineering">BSc Petroleum Engineering</option>
                                <option value="BSc Natural Gas Engineering">BSc Natural Gas Engineering</option>
                                <option value="BSc Petroleum Geosciences and Engineering">BSc Petroleum Geosciences and Engineering</option>
                                <option value="BSc Petroleum Refining and Petrochemical Engineering">BSc Petroleum Refining and Petrochemical Engineering</option>
                                <option value="BSc Chemical Engineering">BSc Chemical Engineering</option>
                            </select>
                            @error('program')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="residential_status" class="form-label">Residency Status</label>
                            <select name="residential_status" class="form-control bg-dark text-white" required>
                                <option value="" disabled selected>Select Residency</option>
                                <option value="resident">Resident</option>
                                <option value="non_resident">Non-Resident</option>
                            </select>
                            @error('residential_status')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning text-black">Submit info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
