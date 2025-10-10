<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForceNonWww
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (str_starts_with($request->header('host'), 'www.')) {
            $request->headers->set('host', str_replace('www.', '', $request->header('host')));

            return redirect()->to($request->fullUrl(), 301);
        }

        return $next($request);
    }
}
