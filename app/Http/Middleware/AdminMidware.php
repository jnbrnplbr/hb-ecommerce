<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class AdminMidware
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
        $user = new User;
        if($user->getCurrentRole() != 'administrator' && $user->getCurrentRole() != 'admin')
        {
            return redirect('/404');
        }

        return $next($request);
    }
}
