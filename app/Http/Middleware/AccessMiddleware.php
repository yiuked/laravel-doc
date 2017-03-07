<?php

namespace App\Http\Middleware;

use Closure;

class AccessMiddleware
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
        //$route = $request->route();
        //可以通过 $route与$request->user() 来判断用户是否具备某个uri的访问权限
        if (! $request->user()->isSuperAdmin()) {
            // Redirect...
        }
        return $next($request);
    }
}
