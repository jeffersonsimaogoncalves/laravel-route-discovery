<?php


namespace Spatie\RouteDiscovery\Tests\TestClasses\Middleware;

use Closure;
use Illuminate\Http\Request;

class AnotherTestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
