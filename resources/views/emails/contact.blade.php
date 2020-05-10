@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact Problem</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <ul>
                            <li>Name : {{$name}}</li>
                            <li>Email : {{$email}}</li>
                            <li>Subject : {{$subject}}</li>
                            <li>Message: {{$messages}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
