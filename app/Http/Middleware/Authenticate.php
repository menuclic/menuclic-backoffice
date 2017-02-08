<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class Authenticate
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
        $session = $request->session()->get('user');

        if (empty($session)) {
            return response()->redirectTo('/login');
        }

        $cache = Cache::get($session->token->token);

        if (empty($cache)) {
            return response()->redirectTo('/login')->with('error', 'Tu sesión ha expirado, por favor inicia nuevamente.');
        }

        return $next($request);
    }
}
