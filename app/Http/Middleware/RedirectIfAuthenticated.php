<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }


        return $next($request);

    }



//    protected $auth;
//
//    /**
//     * Create a new filter instance.
//     *
//     * @param  Guard  $auth
//     * @return void
//     */
//    public function __construct(Guard $auth)
//    {
//        $this->auth = $auth;
//    }
//
//    /**
//     * Handle an incoming request.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \Closure  $next
//     * @return mixed
//     */
//    public function handle($request, Closure $next)
//    {
//        if ($this->auth->check())
//        {
//            return new RedirectResponse(url('/'));
//        }
//
//        return $next($request);
//    }
}