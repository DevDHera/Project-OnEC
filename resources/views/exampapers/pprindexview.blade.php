@extends('layouts.userApp')

@section('content')
    <h1>Exam Paper Catelogue</h1>
    @if(count($exampapers) > 0)
       @foreach($exampapers as $exampaper)
            <!--TO DO: Categorize accroding to edufield
                <div class="dropdown well">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <h3>{{$exampaper->edufield}}</h3>
            </div>-->
            <div class="well">
                <h3><a href="/exampapers/{{$exampaper->id}}">{{$exampaper->module}}</a></h3>
                <small>
                    @if($exampaper->type == "EXAM")
                        Exam 
                    @else
                        Assignment
                    @endif    
                    Post on {{$exampaper->created_at}}</small>
            </div>
       @endforeach
       {{$exampapers->links()}}
    @else
        <p>No Exam Catelogues Found</p>
    @endif
@endsection