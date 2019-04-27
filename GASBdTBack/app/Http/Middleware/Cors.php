<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $origin = "*";
        if (in_array("HTTP_ORIGIN", $_SERVER)) {
            $origin = $_SERVER['HTTP_ORIGIN'];
        }
        return $next($request)
            ->header('Access-Control-Allow-Origin', $origin)
            // Depending of your application you can't use '*'
            // Some security CORS concerns 
            //->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST, OPTIONS, PUT')
            ->header('Access-Control-Allow-Credentials', 'true')
            ->header('Access-Control-Max-Age', '10000')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With');
    }
}
