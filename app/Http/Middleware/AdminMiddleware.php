<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminMiddleware
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
        $uuid=Session::get('uuid');
        $uuid = $uuid[0];
        if($uuid)
        {
            return $next($request);
        }
        else
        {
            Session::flash('error','You do not have to access');
            return Redirect("/");
        }
        
    }
}
