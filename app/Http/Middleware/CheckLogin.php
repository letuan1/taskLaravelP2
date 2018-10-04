<?php

namespace App\Http\Middleware;

use App\Http\Controllers\LoginController;
use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next)
    {

        if ($request->username == 'admin'){
            if ($request->pass == 'admin'){
                return redirect()->route('list');
            }
        }
        return $next($request);
    }
}
