<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AcceptJsonRequest
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $headers = $request->headers;
        if ($headers->contains('Accept', '*/*')) {

            $request->headers->set('Accept', 'application/json');
        }

        return $next($request);
    }
}
