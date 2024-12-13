<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IpMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $blockedIP = '192.168.1.7';
        $allowedIps = ['172.20.10.4', '192.168.1.7'];
        
        if (in_array($blockedIP, $allowedIps)) {
            return response()->json(['message' => 'Access Denied'], 403);
        }
        
        return $next($request);
    }
}
