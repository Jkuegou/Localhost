<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin')->with('error', 'Please login as an admin.');
        }
        return $next($request);
    }
}
