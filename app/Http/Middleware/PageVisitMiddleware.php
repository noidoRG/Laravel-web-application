<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PageVisitMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
// PageVisitMiddleware.php

    public function handle($request, Closure $next)
    {
        $pageName = $request->route()->getName();
        
        // Update total visits in session
        session(['total_visits_' . $pageName => session('total_visits_' . $pageName, 0) + 1]);

        // Update session visits in cookies
        $cookieName = 'session_visits_' . $pageName;
        $sessionVisits = cookie($cookieName, 0);
        cookie($cookieName, $sessionVisits + 1, 60); // 60 minutes

        return $next($request);
    }

}
