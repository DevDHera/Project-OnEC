@extends('layouts.userApp')

@section('content')
    <h1>Publish Exam</h1>
    {!! Form::open(['action'=> 'ExamPapersController@store', 'method' => 'POST']) !!}
        <div class="from-group">
            {{Form::label('lecturerName', 'Lecturer Name')}}
            {{Form::text('lecturerName', '', ['class' => 'form-control', 'placeholder' => 'Name of the Lecturer'])}}
        </div>
        <div class="from-group">
            {{Form::label('institute', 'Institute Name')}}
            {{Form::text('institute', '', ['class' => 'form-control', 'placeholder' => 'Name of the Institute'])}}
        </div>
        <div class="from-group">
            {{Form::label('edufield', 'Select Educational Field')}}
            {{Form::select('edufield', ['Computer Science' => 'Computer Science', 'Business' => 'Business', 'English' => 'English'], null, ['class' => 'form-control', 'placeholder' => 'Select A Education Field'])}}
        </div>
        <div class="from-group">
            {{Form::label('gradyear', 'Select Year')}}
            {{Form::select('gradyear', ['1' => 'Year One', '2' => 'Year Two', '3' => 'Year Three', '4' => 'Year Four'], null, ['class' => 'form-control', 'placeholder' => 'Select A Ungrad Year'])}}
        </div>
        <div class="from-group">
            {{Form::label('module', 'Select a Module')}}            
            {{Form::select('module', ['QTC' => 'QTC', 'SAD' => 'SAD', 'SSW' => 'System Software','C++' => 'C++' , 'BS' => 'Business Statistics', 'HR' => 'HR','ES' => 'Essay', 'G' => 'Grammer'], null, ['class' => 'form-control', 'placeholder' => 'Select A Module'])}}            
        </div>
        <div class="from-group">
                {{Form::label('type', 'Select Procedure')}}
                {{Form::select('type', ['EXAM' => 'Exam', 'ASSIGNMENT' => 'Assignment'], null, ['class' => 'form-control', 'placeholder' => 'Select A Examination Procedure'])}}
        </div>
        <div class="from-group">
                {{Form::label('noquestions', 'Select Number of Questions')}}
                {{Form::select('noquestions', ['10' => '10', '15' => '15', '20' => '20'], null, ['class' => 'form-control', 'placeholder' => 'Select Number of Questions'])}}
        </div>
        <div class="from-group">
                {{Form::label('timeduration', 'Select Number of Questions')}}
                {{Form::select('timeduration', ['0' => '0','30' => '30', '45' => '45', '60' => '60'], null, ['class' => 'form-control', 'placeholder' => 'Select Time Duration'])}}
        </div>
        <div class="pull-right">
            <br>
            {{Form::submit('Continue', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}   
@endsection