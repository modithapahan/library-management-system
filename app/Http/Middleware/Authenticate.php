<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    // protected function redirectTo(Request $request): ?string
    // {
    //     return $request->expectsJson() ? null : route('login');
    // }

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('user.login');
        }
    }

    public function handle($request, $next, ...$guards) {
        if(Auth::guard($guards)->check()) {
            if(Auth::user()->role_id === 1) {
                return redirect('/');
            } else {
                return redirect('/admin/dashboard');
            }
        }
        return $next($request);
    }
}
