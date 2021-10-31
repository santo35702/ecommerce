<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
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
        if (session('utype') === 'ADM') {
            return $next($request);
        } else {
            $request->session()->flash('error', 'You are not Admin');
            return redirect()->route('login');
        }

    }
}
