@extends('layouts.adminApp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    You Are Logged in as a <strong>ADMIN</strong>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
