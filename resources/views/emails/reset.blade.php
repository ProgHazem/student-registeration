@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reset Password</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <p>Hello student : {{$name}} which your email is : {{$email}} , your password is : {{$password}}</p>
                        <p>You can login with this password</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
