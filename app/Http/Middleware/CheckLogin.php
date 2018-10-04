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
    public function handle(Request $request, Closure $next)
    {
        $loginController = new LoginController();
        $users = $loginController->getData();
        foreach ($users as $user) {
            if ($request->input('username') == $user->username)
                if ($request->input('pass') == $user->password){
                    return redirect()->route('list');
                }
            }

        return $next($request);
    }
}
