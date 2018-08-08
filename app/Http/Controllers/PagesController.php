<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    
    public function about() {
        return view('pages.about');
    }
    
    public function institutesInfo() {
        $data = array(
            'institutes' => ['NIBM', 'UCSC', 'SLIIT', 'ESFOT', 'IIT', 'ICBT']
        );
        return view('pages.institutes')->with($data);
    }
}
