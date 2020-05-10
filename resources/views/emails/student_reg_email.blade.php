@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registeration student account</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <p>hello {{$name}} please waiting result for choosing department!! Your data are: </p>
                        <ul>
                            <li>Name : {{$name}}</li>
                            <li>Email : {{$email}}</li>
                            <li>Deparment : {{$department}}</li>
                            <li>National ID: {{$national_number}}</li>
                        </ul>
                    </div>
                    <a class="btn btn-primary" href="{{url('/')}}">Home Page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
