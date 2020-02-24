<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $role
     * @return mixed
     */


    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            Auth::logout();
            return redirect('/login')
                ->with('message', 'You dont have permission to login in dashboard,you dont have any role!');
        }

        return $next($request);
    }

}
