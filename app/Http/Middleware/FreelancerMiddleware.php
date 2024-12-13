<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FreelancerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'freelancer') {
            return $next($request);
        }
        
        return redirect('/login')->with('error', 'Akses ditolak. Anda tidak memiliki izin freelancer.');
    }
} 