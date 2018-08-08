@extends('layouts.userApp')

@section('content')
    <h3>Result Sheet</h3>
    <div class="jumbotron text-center">
        <h2>Your Results</h2><br><br>
        
        

        
        <div style="display: none;">
            {{$count=0}}
            
            @for($i=0;$i<10;$i++)            
                @for($j=$i;$j<=$i;$j++)
                    @if($correctans->get($i)->answerid == $studentans->get($i)->stuanswerid)
                    {{$count++}}
                    @endif
                @endfor
            @endfor
    </div>
    <h4>Number of Questions : 10</h4>
    <h4>Correct Answers &nbsp;&nbsp;: {{$count}}</h4>
    <h4 class="success">Total Marks : {{$count*10}} %</h4>

    {!! Form::open(['action' => 'StudentResultController@store', 'method' => 'POST']) !!}
    <div style="display: none;">
            {{Form::text('eid', $correctans->get(1)->exampprid, ['class' => 'form-control', 'placeholder' => 'Name of the Institute'])}}
            {{Form::text('result', $count*10, ['class' => 'form-control', 'placeholder' => 'Name of the Institute'])}}
            {{Form::text('uid', $studentans->get(1)->user_id, ['class' => 'form-control', 'placeholder' => 'Name of the Institute'])}}
            
    </div> 
    <div>
            {{Form::submit('OK!!!', ['class' => 'btn btn-primary'])}}  
    </div>
    {!! Form::close() !!}
    </div>
@endsection