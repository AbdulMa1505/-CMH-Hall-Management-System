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
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf <!-- Included CSRF token for security -->
                        @method('PUT')

                        <div class="mb-3">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{{ $category->first_name }}" required>
                            @error('first_name')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{ $category->last_name }}" required>
                            @error('last_name')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control" required>
                                <option value="" disabled>Select Gender</option>
                                <option value="female" {{ $category->gender == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="male" {{ $category->gender == 'male' ? 'selected' : '' }}>Male</option>
                            </select>
                            @error('gender')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $category->email }}" required>
                            @error('email')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" value="{{ $category->phone_number }}" required>
                            @error('phone_number')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="program">Program</label>
                            <select name="program" class="form-control" required>
                                <option value="" disabled>Select Program</option>
                                <option value="BSc Mining Engineering" {{ $category->program == 'BSc Mining Engineering' ? 'selected' : '' }}>BSc Mining Engineering</option>
                                <option value="BSc Minerals Engineering" {{ $category->program == 'BSc Minerals Engineering' ? 'selected' : '' }}>BSc Minerals Engineering</option>
                                <option value="BSc Mechanical Engineering" {{ $category->program == 'BSc Mechanical Engineering' ? 'selected' : '' }}>BSc Mechanical Engineering</option>
                                <option value="BSc Electrical and Electronic Engineering" {{ $category->program == 'BSc Electrical and Electronic Engineering' ? 'selected' : '' }}>BSc Electrical and Electronic Engineering</option>
                                <option value="BSc Renewable Energy Engineering" {{ $category->program == 'BSc Renewable Energy Engineering' ? 'selected' : '' }}>BSc Renewable Energy Engineering</option>
                                <option value="BSc Computer Science and Engineering" {{ $category->program == 'BSc Computer Science and Engineering' ? 'selected' : '' }}>BSc Computer Science and Engineering</option>
                                <option value="BSc Mathematics" {{ $category->program == 'BSc Mathematics' ? 'selected' : '' }}>BSc Mathematics</option>
                                <option value="Diploma in Plant and Maintenance Engineering" {{ $category->program == 'Diploma in Plant and Maintenance Engineering' ? 'selected' : '' }}>Diploma in Plant and Maintenance Engineering</option>
                                <option value="Diploma in Electrical and Electronic Engineering" {{ $category->program == 'Diploma in Electrical and Electronic Engineering' ? 'selected' : '' }}>Diploma in Electrical and Electronic Engineering</option>
                                <option value="BSc Cyber Security" {{ $category->program == 'BSc Cyber Security' ? 'selected' : '' }}>BSc Cyber Security</option>
                                <option value="BSc Information Systems and Technology" {{ $category->program == 'BSc Information Systems and Technology' ? 'selected' : '' }}>BSc Information Systems and Technology</option>
                                <option value="BSc Statistical Data Science" {{ $category->program == 'BSc Statistical Data Science' ? 'selected' : '' }}>BSc Statistical Data Science</option>
                                <option value="BSc Logistics and Transport Management" {{ $category->program == 'BSc Logistics and Transport Management' ? 'selected' : '' }}>BSc Logistics and Transport Management</option>
                                <option value="BSc Economics and Industrial Organization" {{ $category->program == 'BSc Economics and Industrial Organization' ? 'selected' : '' }}>BSc Economics and Industrial Organization</option>
                                <option value="BSc Geomatic Engineering" {{ $category->program == 'BSc Geomatic Engineering' ? 'selected' : '' }}>BSc Geomatic Engineering</option>
                                <option value="BSc Geological Engineering" {{ $category->program == 'BSc Geological Engineering' ? 'selected' : '' }}>BSc Geological Engineering</option>
                                <option value="BSc Spatial Planning" {{ $category->program == 'BSc Spatial Planning' ? 'selected' : '' }}>BSc Spatial Planning</option>
                                <option value="BSc Environmental and Safety Engineering" {{ $category->program == 'BSc Environmental and Safety Engineering' ? 'selected' : '' }}>BSc Environmental and Safety Engineering</option>
                                <option value="BSc Land Administration and Information Systems" {{ $category->program == 'BSc Land Administration and Information Systems' ? 'selected' : '' }}>BSc Land Administration and Information Systems</option>
                                <option value="Diploma in General Drilling" {{ $category->program == 'Diploma in General Drilling' ? 'selected' : '' }}>Diploma in General Drilling</option>
                                <option value="BSc Petroleum Engineering" {{ $category->program == 'BSc Petroleum Engineering' ? 'selected' : '' }}>BSc Petroleum Engineering</option>
                                <option value="BSc Natural Gas Engineering" {{ $category->program == 'BSc Natural Gas Engineering' ? 'selected' : '' }}>BSc Natural Gas Engineering</option>
                                <option value="BSc Petroleum Geosciences and Engineering" {{ $category->program == 'BSc Petroleum Geosciences and Engineering' ? 'selected' : '' }}>BSc Petroleum Geosciences and Engineering</option>
                                <option value="BSc Petroleum Refining and Petrochemical Engineering" {{ $category->program == 'BSc Petroleum Refining and Petrochemical Engineering' ? 'selected' : '' }}>BSc Petroleum Refining and Petrochemical Engineering</option>
                                <option value="BSc Chemical Engineering" {{ $category->program == 'BSc Chemical Engineering' ? 'selected' : '' }}>BSc Chemical Engineering</option>
                            </select>
                            @error('program')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="residency">Residency</label>
                            <div>
                                <input type="radio" name="residential_stauts" value="resident" id="resident" 
                                    {{ $category->residential_status == 'resident' ? 'checked' : '' }} required>
                                <label for="resident">Resident</label>
                            </div>
                            <div>
                                <input type="radio" name="residential_stauts" value="non_resident" id="non_resident" 
                                    {{ $category->residential_status == 'non_resident' ? 'checked' : '' }}>
                                <label for="non_resident">Non-Resident</label>
                            </div>
                            @error('resident')<span class="text-danger">({{ $message }})</span>@enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
