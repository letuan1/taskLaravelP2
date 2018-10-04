<?php

namespace App\Http\Middleware;

use App\Http\Controllers\LoginController;
use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $login = new LoginController();
        $users = $login->getData();
        foreach ($users as $user) {
            if ($request->usernames == $user['username']) {
                if ($request->pass == $user['password']) {
                    return redirect()->route('list');
                }
            }
        }
        return $next($request);
    }
}
