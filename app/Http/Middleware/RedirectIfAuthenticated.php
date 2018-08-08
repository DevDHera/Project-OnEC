<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch($guard){
            case 'admin':
                if(Auth::guard($guard)->check()) {
                    return redirect()->route('admin.dashboard');
                }
            break;
            
            case 'lecturer':
                if(Auth::guard($guard)->check()) {
                    return redirect()->route('lecturer.dashboard');
                }
            break;
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
            default:
        }

        /*if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }*/

        return $next($request);
    }
}
