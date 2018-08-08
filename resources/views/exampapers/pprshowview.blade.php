@extends('layouts.userApp')

@section('content')
    <a href="/exampapers" class="btn btn-default">Go Back</a>
    <h1>{{$exampaper->edufield}} 
        @if($exampaper->type == "EXAM")
            Exam Paper
        @else
            Assignment Quiz
        @endif
        </h1>
    <h2>Module &nbsp;&nbsp;&nbsp;&nbsp;: {{$exampaper->module}}</h2>
    <h2>Grad Year : {{$exampaper->gradyear}}</h2>
    <hr>
    <small>Lecturer &nbsp;&nbsp;&nbsp;: {{$exampaper->lecturerName}}</small><br>
    <small>Posted on : {{$exampaper->created_at}}</small>

    {!! Form::open(['action' => 'StudentAnswersController@store', 'method' => 'POST']) !!}

    @foreach($questions as $question)    
        <div class="well">
            <h3>
                {{$question->id}} . 
                {{$question->question}}                
            </h3>
            
                @foreach($answers=$question->answers as $answer)
                <div class="form-group" style="margin-left: 5%;">
                    {{Form::radio('ans'.$question->id, $answer->id)}}
                    {{Form::label('ans', $answer->answer)}}
                </div>    
                @endforeach        
            
        </div>        
    @endforeach
    <div style="display: none;">
            {{Form::text('eid', $exampaper->id, ['class' => 'form-control', 'placeholder' => 'Name of the Institute'])}}
            
    </div>    
    <div class="pull-right">
        <br>        
        {{Form::submit('Finish', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection