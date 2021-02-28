<?php namespace RainLab\User\Classes;

use Auth;
use Closure;
use Response;

class AuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return  redirect('/login');
        }

        return $next($request);
    }
}
