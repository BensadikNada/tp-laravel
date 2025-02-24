<?php
  
namespace App\Http\Middleware;
  
use Closure;
use Illuminate\Http\Request;
  
class BlockByIp
{
    public $blockIps = ['127.0.0.1'];
    // public $blockIps = ['whitelist-ip-1', 'whitelist-ip-2', '192.168.1.7'];
  
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (in_array($request->ip(), $this->blockIps)) {
            abort(403, "You are restricted to access the site.");
        }
  
        return $next($request);
    }
}