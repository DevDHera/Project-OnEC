<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LecturerLoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest:lecturer')->except('logout');
    }
    
    public function showLoginForm() {
        return view('auth.lecturer-login');
    }

    public function login(Request $request) {
        //Validating form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        //Attempt log the user in
        if(Auth::guard('lecturer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //If successful, redirect them to their intented location
            return redirect()->intended(route('lecturer.dashboard'));
        }
        //If unsuccessful, redirect back to login with form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

     /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('lecturer')->logout();

        //$request->session()->invalidate();

        return redirect('/');
    }
}
