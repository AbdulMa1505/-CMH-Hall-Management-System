@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">CMH ADMIN PORTAL <a href="{{url('student/create')}}" class="btn btn-primary float-end">ADD</a></h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>FIRST NAME</td>
                                <td>LAST NAME</td>
                                <td>GENDER</td>
                                <td>EMAIL</td>
                                <td>PHONE NUMBER</td>
                                <td>PROGRAM</td>
                                <td>RESIDENCY</td>
                                <td>ACTION</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $pupil)
                                
                            
                            <tr>
                                <td>{{$pupil->id}}</td>
                                <td>{{$pupil->first_name}}</td>
                                <td>{{$pupil->last_name}}</td>
                                <td>{{$pupil->gender}}</td>
                                <td>{{$pupil->email}}</td>
                                <td>{{$pupil->phone_number}}</td>
                                <td>{{$pupil->program}}</td>
                                <td>{{$pupil->residential_stauts}}</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{route('student.show',$pupil->id)}}" class="btn btn-info">view</a>
                                        <a href="{{route('student.edit',$pupil->id)}}" class="btn btn-success">edit</a>
                                        <a href="{{route('student.destroy',$pupil->id)}}" class="btn btn-danger">delete</a>
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