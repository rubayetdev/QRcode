<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockIPAddress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        $blockip = $request->session()->put('ip',[]);
//        $user = $request->ip();
//
//        if (in_array($user,$blockip))
//        {
//            return redirect()->route('blocked');
//        }

        return $next($request);
    }
}
