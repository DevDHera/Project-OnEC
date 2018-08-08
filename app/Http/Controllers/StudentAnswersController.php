<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAnswer;
use App\CorrectAnswers;

class StudentAnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('studentanswer.result');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'ans1' => 'required',
            'ans2' => 'required',
            'ans3' => 'required',
            'ans4' => 'required',
            'ans5' => 'required',
            'ans6' => 'required',
            'ans7' => 'required',
            'ans8' => 'required',
            'ans9' => 'required',
            'ans10' => 'required',            
        ]);

        $stuAns = new StudentAnswer;

        $stuAns->exampprid = $request->input('eid');
        $stuAns->questionid = '1';
        $stuAns->stuanswerid = $request->input('ans1');
        $stuAns->user_id = auth()->user()->id;
        $stuAns->save();

        $stuAns = new StudentAnswer;
        $stuAns->exampprid = $request->input('eid');
        $stuAns->questionid = '2';
        $stuAns->stuanswerid = $request->input('ans2');
        $stuAns->user_id = auth()->user()->id;
        $stuAns->save();
        
        $stuAns = new StudentAnswer;
        $stuAns->exampprid = $request->input('eid');
        $stuAns->questionid = '3';
        $stuAns->stuanswerid = $request->input('ans3');
        $stuAns->user_id = auth()->user()->id;
        $stuAns->save();
        
        $stuAns = new StudentAnswer;
        $stuAns->exampprid = $request->input('eid');
        $stuAns->questionid = '4';
        $stuAns->stuanswerid = $request->input('ans4');
        $stuAns->user_id = auth()->user()->id;
        $stuAns->save();
        
        $stuAns = new StudentAnswer;
        $stuAns->exampprid = $request->input('eid');
        $stuAns->questionid = '5';
        $stuAns->stuanswerid = $request->input('ans5');
        $stuAns->user_id = auth()->user()->id;
        $stuAns->save();
        
        $stuAns = new StudentAnswer;
        $stuAns->exampprid = $request->input('eid');
        $stuAns->questionid = '6';
        $stuAns->stuanswerid = $request->input('ans6');
        $stuAns->user_id = auth()->user()->id;
        $stuAns->save();
        
        $stuAns = new StudentAnswer;
        $stuAns->exampprid = $request->input('eid');
        $stuAns->questionid = '7';
        $stuAns->stuanswerid = $request->input('ans7');
        $stuAns->user_id = auth()->user()->id;
        $stuAns->save();
        
        $stuAns = new StudentAnswer;
        $stuAns->exampprid = $request->input('eid');
        $stuAns->questionid = '8';
        $stuAns->stuanswerid = $request->input('ans8');
        $stuAns->user_id = auth()->user()->id;
        $stuAns->save();
        
        $stuAns = new StudentAnswer;
        $stuAns->exampprid = $request->input('eid');
        $stuAns->questionid = '9';
        $stuAns->stuanswerid = $request->input('ans9');
        $stuAns->user_id = auth()->user()->id;
        $stuAns->save();
        
        $stuAns = new StudentAnswer;
        $stuAns->exampprid = $request->input('eid');
        $stuAns->questionid = '10';
        $stuAns->stuanswerid = $request->input('ans10');
        $stuAns->user_id = auth()->user()->id;
        $stuAns->save();

        $studentans = StudentAnswer::find(auth()->user()->id)->get();
        $correctans = CorrectAnswers::find($request->input('eid'))->get();
        //return $studentans;
        return view('studentanswer.result')->with([
            'success' => 'Congrats! You Completed the Exam',
            'correctans' => $correctans,
            'studentans' => $studentans,
        ]);

        //$eid = $request->input('exampprid');
        //$qid = $request->input('qid');
        //$qid++;

        //return redirect('/exampapers/$eid?page=$qid');
        //$exampaper = ExamPaper::find($eid);
        //return redirect('/exampapers/$eid?page=$qid')->with([
          //  'exampaper' => $exampaper,
            //'questions' => $exampaper->questions(),
            //'qlinks'     => $exampaper->questions()->links(),
        
        //]);
        
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
