<?php

namespace App\Http\Middleware;

use Closure;

class EmployeeMidware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // return $next($request);
        if(($user->getCurrentRole() != 'admin') && ($user->getCurrentRole() != 'employee'))
        {
            return redirect('/404');
        }
        return $next($request);
    }
}
