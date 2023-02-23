<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }else{
            
            $roles = array_slice(func_get_args(), 2);

            foreach ($roles as $role) { 
                $user = \Auth::user()->role;
                if( $user == $role){
                    return $next($request);
                }
            }
        }

    }
}
