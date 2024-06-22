<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        //added additional function for cresidential to redirect deaflt route 
        if (Auth::check() && $request->user()->role !== $role) {
            if ($request->user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } elseif ($request->user()->role === 'vendor') {
                return redirect()->intended('/vendor/dashboard');
            } else {
                return redirect()->route('dashboard'); // Common dashboard for other roles
            }
        }

        return $next($request);
    }
}
