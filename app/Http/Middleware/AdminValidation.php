<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AdminValidation
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
        if (Session::has('id')){
            if ((Session::get('type') == 'admin') || (Session::get('type') == 'superadmin')){
                return $next($request);
                }
            else{
                return redirect('/admin/login');
            }
        }
        else{
            return redirect('/admin/login');
        }
    }
}
