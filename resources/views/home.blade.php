@extends('layouts.userApp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">USER Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You Are Logged in as a <strong>Student</strong><br><br>

                    

                    Take an <strong>Exam</strong> or try out <strong>Assignmet</strong><br>

                    <a href="/exampapers" class="btn btn-primary">Sit for an Exam</a><br><br>
                    <a href="/exampapers" class="btn btn-primary">Take an Assignment</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
