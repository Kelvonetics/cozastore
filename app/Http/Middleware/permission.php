<?php

namespace App\Http\Middleware;

use Closure;

class permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $perm)
    {    
        app('App\Http\Controllers\MicrosoftController')->refresh_token();
        

        if(\Auth::user()->roles->permission->$perm == 0)
        {
            // throw new \Exception("Your Role Id : ". \Auth::user()->role_obj->permission->$perm);
            //return redirect()->route('admin.setup');
            abort(403);
        }            
            
        return $next($request);
    }
}
