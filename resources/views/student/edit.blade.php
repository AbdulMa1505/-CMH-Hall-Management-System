@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h2>CMH Management Portal</h2>
                    <a href="{{ url('student') }}" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $student->first_name) }}" required>
                            @error('first_name')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $student->last_name) }}" required>
                            @error('last_name')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" class="form-control" required>
                                <option value="" disabled>Select Gender</option>
                                <option value="female" {{ old('gender', $student->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="male" {{ old('gender', $student->gender) == 'male' ? 'selected' : '' }}>Male</option>
                            </select>
                            @error('gender')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}" required>
                            @error('email')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $student->phone_number) }}" required>
                            @error('phone_number')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="program" class="form-label">Program</label>
                            <select name="program" class="form-control" required>
                                <option value="" disabled>Select Program</option>
                                <!-- Add your program options here -->
                                <option value="BSc Mining Engineering" {{ old('program', $student->program) == 'BSc Mining Engineering' ? 'selected' : '' }}>BSc Mining Engineering</option>
                                <option value="" disabled selected>Select Program</option>
                                <!-- Faculty of Mining and Minerals Technology -->
                                <option value="BSc Mining Engineering" {{ old('program', $student->program) == 'BSc Mining Engineering' ? 'selected' : '' }}>BSc Mining Engineering</option>
                                <option value="BSc Minerals Engineering" {{ old('program', $student->program) == 'BSc Minerals Engineering' ? 'selected' : '' }}>BSc Minerals Engineering</option>
                                <!-- Faculty of Engineering -->
                                <option value="BSc Mechanical Engineering" {{ old('program', $student->program) == 'BSc Mechanical Engineering' ? 'selected' : '' }}>BSc Mechanical Engineering</option>
                                <option value="BSc Electrical and Electronic Engineering" {{ old('program', $student->program) == 'BSc Electrical and Electronic Engineering' ? 'selected' : '' }}>BSc Electrical and Electronic Engineering</option>
                                <option value="BSc Renewable Energy Engineering" {{ old('program', $student->program) == 'BSc Renewable Energy Engineering' ? 'selected' : '' }}>BSc Renewable Energy Engineering</option>
                                <option value="BSc Computer Science and Engineering" {{ old('program', $student->program) == 'BSc Computer Science and Engineering' ? 'selected' : '' }}>BSc Computer Science and Engineering</option>
                                <option value="BSc Mathematics" {{ old('program', $student->program) == 'BSc Mathematics' ? 'selected' : '' }}>BSc Mathematics</option>
                                <option value="Diploma in Plant and Maintenance Engineering" {{ old('program', $student->program) == 'Diploma in Plant and Maintenance Engineering' ? 'selected' : '' }}>Diploma in Plant and Maintenance Engineering</option>
                                <option value="Diploma in Electrical and Electronic Engineering" {{ old('program', $student->program) == 'Diploma in Electrical and Electronic Engineering' ? 'selected' : '' }}>Diploma in Electrical and Electronic Engineering</option>
                                <!-- Faculty of Computing and Mathematical Sciences -->
                                <option value="BSc Cyber Security" {{ old('program', $student->program) == 'BSc Cyber Security' ? 'selected' : '' }}>BSc Cyber Security</option>
                                <option value="BSc Information Systems and Technology" {{ old('program', $student->program) == 'BSc Information Systems and Technology' ? 'selected' : '' }}>BSc Information Systems and Technology</option>
                                <option value="BSc Statistical Data Science" {{ old('program', $student->program) == 'BSc Statistical Data Science' ? 'selected' : '' }}>BSc Statistical Data Science</option>
                                <!-- Faculty of Integrated Management Studies -->
                                <option value="BSc Logistics and Transport Management" {{ old('program', $student->program) == 'BSc Logistics and Transport Management' ? 'selected' : '' }}>BSc Logistics and Transport Management</option>
                                <option value="BSc Economics and Industrial Organization" {{ old('program', $student->program) == 'BSc Economics and Industrial Organization' ? 'selected' : '' }}>BSc Economics and Industrial Organization</option>
                                <!-- Faculty of Geosciences and Environmental Studies -->
                                <option value="BSc Geomatic Engineering" {{ old('program', $student->program) == 'BSc Geomatic Engineering' ? 'selected' : '' }}>BSc Geomatic Engineering</option>
                                <option value="BSc Geological Engineering" {{ old('program', $student->program) == 'BSc Geological Engineering' ? 'selected' : '' }}>BSc Geological Engineering</option>
                                <option value="BSc Spatial Planning" {{ old('program', $student->program) == 'BSc Spatial Planning' ? 'selected' : '' }}>BSc Spatial Planning</option>
                                <option value="BSc Environmental and Safety Engineering" {{ old('program', $student->program) == 'BSc Environmental and Safety Engineering' ? 'selected' : '' }}>BSc Environmental and Safety Engineering</option>
                                <option value="BSc Land Administration and Information Systems" {{ old('program', $student->program) == 'BSc Land Administration and Information Systems' ? 'selected' : '' }}>BSc Land Administration and Information Systems</option>
                                <option value="Diploma in General Drilling" {{ old('program', $student->program) == 'Diploma in General Drilling' ? 'selected' : '' }}>Diploma in General Drilling</option>
                                <!-- School of Petroleum Studies -->
                                <option value="BSc Petroleum Engineering" {{ old('program', $student->program) == 'BSc Petroleum Engineering' ? 'selected' : '' }}>BSc Petroleum Engineering</option>
                                <option value="BSc Natural Gas Engineering" {{ old('program', $student->program) == 'BSc Natural Gas Engineering' ? 'selected' : '' }}>BSc Natural Gas Engineering</option>
                                <option value="BSc Petroleum Geosciences and Engineering" {{ old('program', $student->program) == 'BSc Petroleum Geosciences and Engineering' ? 'selected' : '' }}>BSc Petroleum Geosciences and Engineering</option>
                                <option value="BSc Petroleum Refining and Petrochemical Engineering" {{ old('program', $student->program) == 'BSc Petroleum Refining and Petrochemical Engineering' ? 'selected' : '' }}>BSc Petroleum Refining and Petrochemical Engineering</option>
                                <option value="BSc Chemical Engineering" {{ old('program', $student->program) == 'BSc Chemical Engineering' ? 'selected' : '' }}>BSc Chemical Engineering</option>
                                
                            </select>
                            @error('program')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="residential_status" class="form-label">Residency Status</label>
                            <select name="residential_status" class="form-control" required>
                                <option value="" disabled>Select Residency</option>
                                <option value="resident" {{ old('residential_status', $student->residential_status) == 'resident' ? 'selected' : '' }}>Resident</option>
                                <option value="non_resident" {{ old('residential_status', $student->residential_status) == 'non_resident' ? 'selected' : '' }}>Non-Resident</option>
                            </select>
                            @error('residential_status')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Update Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
