<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrustIpMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$trustedIps) { 
        $clientIp = $request->getClientIp(); 
        if ($clientIp === '192.168.1.7') 
            { 
                return response('Non autorisé', 401); 
            } 
        return $next($request); 
    }
        
}
