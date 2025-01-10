<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class GiftshopAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $link)
    {
        $isAuthenticatedAdmin = (Auth::guard('giftshop')->check());

        //This will be excecuted if the new authentication fails.
        if (!$isAuthenticatedAdmin){
            return redirect()->route($link . 'giftshop.login')->with('message', 'Authentication Error.');
        }
        return $next($request);

    }
}
