<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ApplicantRule
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->type != 'applicant' && Auth::user()->type != 'HR') {
            return redirect()->route("dashboard")
                ->with('error', 'Only applicants and HR users are allowed to access this page.');
        }
        return $next($request);
    }
}
