<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExamPaper;



class ExamPapersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exampapers = ExamPaper::orderBy('created_at', 'desc')->paginate(10);
        return view('exampapers.pprindexview')->with('exampapers', $exampapers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exampapers.pprcreateview');
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
            'lecturerName' => 'required',
            'institute' => 'required',
            'edufield' => 'required',
            'type' => 'required',
            'gradyear' => 'required',
            'module' => 'required',
            'noquestions' => 'required',
            'timeduration' => 'required',
        ]);

        //Create Exam Paper
        $exampaper = new ExamPaper;
        //$exampaper->lecturerName = $request->input('lecturerName');
        $exampaper->lecturerName = auth('lecturer')->user()->name;
        $exampaper->institute = $request->input('institute');
        $exampaper->edufield = $request->input('edufield');
        $exampaper->type = $request->input('type');
        $exampaper->gradyear = $request->input('gradyear');
        $exampaper->module = $request->input('module');
        $exampaper->noquestions = $request->input('noquestions');
        $exampaper->timeduration = $request->input('timeduration');
        $exampaper->save();

        

        return redirect('/questions/create')->with([
            'success' => 'Primary Data Inputed',
            'exampprid' => $exampaper->id,
            'noquestions' => $exampaper->noquestions,
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
        $exampaper = ExamPaper::find($id);
        
        return view('exampapers.pprshowview')->with([
            'exampaper' => $exampaper,
            'questions' => $exampaper->questions,
            //'qlinks'     => $exampaper->questions()->links(),
        
        ]);
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
