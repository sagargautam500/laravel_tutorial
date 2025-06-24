<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "Country Check Middleware";
        // if ($request->country !== 'Nepal') {
        //     return response("Unauthorized", 403);
        //     // die("Unauthorized: Access is restricted to users from Nepal only.");
        // }
        return $next($request);
    }
}
