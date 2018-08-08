@extends('layouts.userApp')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to ProjectOnEC!!!</h1>
        <p>The Online Exam Portal for Everyone.</p>
        <p>
            <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
            <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
        </p>
    </div>    
@endsection