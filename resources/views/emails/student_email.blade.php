@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registeration student account</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <p>You can login with under data</p>
                        <ul>
                            <li>Name : {{$name}}</li>
                            <li>Email : {{$email}}</li>
                            <li>Password : {{$password}}</li>
                            <li>National ID: {{$national_number}}</li>
                        </ul>
                    </div>
                    <a class="btn btn-primary" href="{{url('/student/login')}}">Login here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
