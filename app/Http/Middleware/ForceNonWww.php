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
        if (str_starts_with($request->getHost(), 'www.')) {
            $newUrl = $request->getScheme() . '://' .
                      str_replace('www.', '', $request->getHost()) .
                      $request->getRequestUri();

            return redirect()->to($newUrl, 301);
        }

        return $next($request);
    }
}
