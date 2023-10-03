<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RemoveTrailingSlashMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (preg_match('/.+\/$/', $request->getRequestUri())) {
            return redirect(rtrim($request->getRequestUri(), '/'), 301);
        }

        return $next($request);
    }
}
