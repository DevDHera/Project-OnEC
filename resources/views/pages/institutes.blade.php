@extends('layouts.userApp')

@section('content')
    <h1>Who are with us...</h1>
        @if(count($institutes) > 0)
            <ul class="list-group">    
                @foreach($institutes as $institute)
                    <li class="list-group-item">{{$institute}}</li>
                @endforeach                
            </ul>
        @endif    
@endsection()