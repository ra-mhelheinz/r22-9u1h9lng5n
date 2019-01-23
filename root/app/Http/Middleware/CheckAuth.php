<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckAuth
{
	// Check authentication session.
    public function handle($request, Closure $next)
    {
        if (!Session::exists('_user')) {
            // user value cannot be found in session
            return redirect('/login');
        }

        return $next($request);
    }

}