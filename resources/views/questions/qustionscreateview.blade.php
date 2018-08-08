@extends('layouts.userApp')

@section('content')
    <h1>Question Creation</h1>
    
    {!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) !!}
        
            <div class="form-group">                
                {{Form::label('exampprid', 'Paper ID')}}
                {{Form::text('exampprid', session('exampprid') , ['class' => 'form-control', 'placeholder' => 'Exam Paper ID'])}}
            </div>
        
        
        
            <div class="form-group">                
                {{Form::label('questionid', 'Number of Questions')}}
                {{Form::text('questionid', session('noquestions'), ['class' => 'form-control', 'placeholder' => 'Total Number of Questions'])}}
            </div>
        
        <div class="form-group">
            {{Form::label('id', 'Question Number')}}
            {{Form::text('id', '', ['class' => 'form-control', 'placeholder' => 'Enter Question Number'])}}
        </div>    
        
        <div class="form-group">
            {{Form::label('question', 'Question')}}
            {{Form::textarea('question', '', ['class' => 'form-control','rows' => '3' , 'placeholder' => 'Question'])}}
        </div>    
        
        <div class="form-group">
            {{Form::label('ans', 'Answers...')}}            
        </div>
        
        <div class="form-group">
            {{Form::label('ansid1', 'Answer - 1')}}
            {{Form::text('ansid1', '', ['class' => 'form-control', 'placeholder' => 'Answer 1'])}}
        </div>

        <div class="form-group">
            {{Form::label('ansid2', 'Answer - 2')}}
            {{Form::text('ansid2', '', ['class' => 'form-control', 'placeholder' => 'Answer 2'])}}
        </div>

        <div class="form-group">
            {{Form::label('ansid3', 'Answer - 3')}}
            {{Form::text('ansid3', '', ['class' => 'form-control', 'placeholder' => 'Answer 3'])}}
        </div>    

        <div class="form-group">
            {{Form::label('ansid4', 'Answer - 4')}}
            {{Form::text('ansid4', '', ['class' => 'form-control', 'placeholder' => 'Answer 4'])}}
        </div>

        <div class="form-group">
            {{Form::label('ansid5', 'Answer - 5')}}
            {{Form::text('ansid5', '', ['class' => 'form-control', 'placeholder' => 'Answer 5'])}}
        </div> 
        <div class="form-group">
            {{Form::label('correctans', 'Correct Answer')}}
            {{Form::select('correctans', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control', 'placeholder' => 'Select the Correct Answer'])}}
        </div> 
        <div class="pull-right">
            {{Form::submit('Next', ['class' => 'btn btn-primary'])}}  
        </div> 
    {!! Form::close() !!}
@endsection