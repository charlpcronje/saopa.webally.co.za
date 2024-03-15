<?php
// app/Http/Middleware/CheckRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You are not authorized to access this page');
        }

        if (Auth::user()->role->name != $role) {
            return redirect()->route('login')->with('error', 'You do not have the required role to access this page');
        }

        return $next($request);
    }
}