<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IpBlockedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public $restrictedIp=['192.168.1.7','127.0.0.1'];

    public function handle(Request $request, Closure $next): Response
    {
        if(in_array($request->ip(),$this->restrictedIp)){
            return response()->json([
                'success'=> false,
                'message'=>'You are not allowed to access this page'
            ]);
        }
        return $next($request);
    }
}
