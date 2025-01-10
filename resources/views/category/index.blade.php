@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">CMH ADMIN PORTAL <a href="{{url('category/create')}}" class="btn btn-danger float-end">BACK</a></h1>
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
                            @foreach ($categories as $student)
                                
                            
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->first_name}}</td>
                                <td>{{$student->last_name}}</td>
                                <td>{{$student->gender}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone_number}}</td>
                                <td>{{$student->program}}</td>
                                <td>{{$student->residential_stauts}}</td>
                                <td>
                                    <a href="{{route('category.show',$student->id)}}" class="btn btn-info">view</a>
                                    <a href="{{route('category.edit',$student->id)}}" class="btn btn-success">edit</a>
                                    <a href="{{route('category.destroy',$student->id)}}" class="btn btn-danger">delete</a>
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