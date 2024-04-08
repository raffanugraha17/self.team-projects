<?php

namespace App\Http\Middleware;

use App\Models\ActivityLog;
use Closure;
use Illuminate\Support\Facades\Auth;

class LogActivityMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $activity = $request->method();
            $module = $request->route()->getName();

            ActivityLog::logLoginLogout($activity, $module);
        }

        return $next($request);
    }
}
