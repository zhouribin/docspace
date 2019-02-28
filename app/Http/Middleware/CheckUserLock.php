<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserLock
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
        try {
            $authUser = auth('web')->user();
            if (!isset($authUser)) {
                throw new \Exception("未登录!");
            }

            dd($authUser);
        } catch (\Exception $e) {
            return route('login');
        }

        return $next($request);
    }
}
