<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserType
{
    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        if($request->session()->get('admin'))
        {
           
           return $next($request);
        }
        return redirect()->route('admin.login');
    }
}
