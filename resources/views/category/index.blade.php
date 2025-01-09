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
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection