<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use App\Answers;
use App\CorrectAnswers;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.qustionscreateview');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'exampprid' => 'required',
            'question' => 'required',
            'questionid' => 'required',
            'id' => 'required',
            'ansid1' => 'required',
            'ansid2' => 'required',
            'ansid3' => 'required',
            'ansid4' => 'required',
            'ansid5' => 'required',
        ]);

        //Create Questions One by One
        $question = new Questions;

        $question->exampprid = $request->input('exampprid');
        $question->id = $request->input('id');
        $question->question = $request->input('question');
        $question->noans = '5';
        $question->save();

        //Create Answers        
        $answer = new Answers;
        //Answer 1
        $answer->exampprid = $request->input('exampprid');
        $answer->questionid = $request->input('id');
        $answer->id = '1';
        $answer->answer = $request->input('ansid1');
        $answer->save();
        //Answer 2
        $answer = new Answers;
        $answer->exampprid = $request->input('exampprid');
        $answer->questionid = $request->input('id');
        $answer->id = '2';
        $answer->answer = $request->input('ansid2');
        $answer->save();
        //Answer 3
        $answer = new Answers;
        $answer->exampprid = $request->input('exampprid');
        $answer->questionid = $request->input('id');
        $answer->id = '3';
        $answer->answer = $request->input('ansid3');
        $answer->save();
        //Answer 4
        $answer = new Answers;
        $answer->exampprid = $request->input('exampprid');
        $answer->questionid = $request->input('id');
        $answer->id = '4';
        $answer->answer = $request->input('ansid4');
        $answer->save();
        //Answer 5
        $answer = new Answers;
        $answer->exampprid = $request->input('exampprid');
        $answer->questionid = $request->input('id');
        $answer->id = '5';
        $answer->answer = $request->input('ansid5');
        $answer->save();

        //Create Correct Answer
        $crans = new CorrectAnswers;
        
        $crans->exampprid = $request->input('exampprid');
        $crans->questionid = $request->input('id');
        $crans->answerid = $request->input('correctans');
        $crans->save();

        return redirect('/questions/create')->with([
            'success' => 'Question Inputed to the Pool',
            'exampprid' => $question->exampprid,
            'noquestions' => $request->input('questionid'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
