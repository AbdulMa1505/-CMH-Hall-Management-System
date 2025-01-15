@extends('layouts.frontend')

@section('content')
<style>
    body {
        background-color: #000000; /* Black background */
        color: #ffffff; /* White text for readability */
    }

    .card-header {
        background-color: #FFD700; /* Deep yellow for headings */
        color: #000000; /* Black text for contrast */
    }

    .btn-primary, .btn-info, .btn-success, .btn-danger {
        border: none;
        font-weight: bold;
    }

    .btn-primary {
        background-color: #FFD700;
        color: #000000; /* Deep yellow button with black text */
    }

    .btn-info {
        background-color: #17a2b8; /* Bootstrap info color */
        color: #ffffff;
    }

    .btn-success {
        background-color: #28a745; /* Bootstrap success color */
        color: #ffffff;
    }

    .btn-danger {
        background-color: #dc3545; /* Bootstrap danger color */
        color: #ffffff;
    }

    table {
        color: #ffffff; /* White text for table content */
    }

    table thead {
        background-color: #FFD700; /* Deep yellow for table headers */
        color: #000000;
    }
</style>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header text-center">
                    <h1>CMH ADMIN PORTAL</h1>
                    <a href="{{ url('student/create') }}" class="btn btn-primary float-end">ADD</a>
                </div>

                <div class="card-body dark">
                    <table class="table table-dark table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>GENDER</th>
                                <th>EMAIL</th>
                                <th>PHONE NUMBER</th>
                                <th>PROGRAM</th>
                                <th>RESIDENCY</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $pupil)
                            <tr>
                                <td>{{ $pupil->id }}</td>
                                <td>{{ $pupil->first_name }}</td>
                                <td>{{ $pupil->last_name }}</td>
                                <td>{{ $pupil->gender }}</td>
                                <td>{{ $pupil->email }}</td>
                                <td>{{ $pupil->phone_number }}</td>
                                <td>{{ $pupil->program }}</td>
                                <td>{{ $pupil->residential_status }}</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{ route('student.show', $pupil->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('student.edit', $pupil->id) }}" class="btn btn-success">Edit</a>
                                        <form action="{{ route('student.destroy', $pupil->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
