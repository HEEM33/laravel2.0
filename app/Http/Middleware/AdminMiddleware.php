<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) 
        {
            if (Auth::user()->role_as == '1') 
            {
                return $next($request);
            } 
            else 
            {
                return redirect('/home')->with('status', 'access denied');
            }
        } 
        else 
        {
            return redirect('/login')->with('status', 'login');
        }
    }
}
