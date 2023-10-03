<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected array $guards;

    public function handle($request, Closure $next, ...$guards): mixed
    {
        $this->guards = $guards;

        return parent::handle($request, $next, ...$guards);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return null;
        }

        if (in_array('admin', $this->guards, true)) {
            return route('admin.login.create');
        }

        return route('login');
    }
}
