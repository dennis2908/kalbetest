<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;

class ForceSSL
{

    public function handle($request, Closure $next)
    {
        if (!app()->environment('local')) {
            // for Proxies
            Request::setTrustedProxies([$request->getClientIp()], 
                Request::HEADER_X_FORWARDED_ALL);

            if (!$request->isSecure()) {
                return redirect()->secure($request->getRequestUri());
            }
        }

        return $next($request);
    }
}