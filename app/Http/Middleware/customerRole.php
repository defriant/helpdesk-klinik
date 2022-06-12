<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomerRole
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
        if ($request->user()->role == 'user') {
            return $next($request);
        }
        return redirect('/');
    }
}
