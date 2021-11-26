<?php

namespace App\Http\Middleware;

use Closure;

class AuthUsers
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
        
        if (false == \Auth::guard('user')->check()) {
            
            return redirect()->route('user.view.login');
        }

        return $next($request);
    }
}
