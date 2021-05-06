<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkRole
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
         $user = $request->input('user');
         $role = $request->input('role');

        if ($user && $role =='admin') {
            return redirect('/create');
        }else{
            return $next($request);
        }
    }
}
