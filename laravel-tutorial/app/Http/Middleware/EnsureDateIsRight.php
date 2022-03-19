<?php

namespace App\Http\Middleware;

use DateTime;
use Closure;
use Illuminate\Http\Request;

class EnsureDateIsRight
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $date_now = new DateTime();
        $date_target = new DateTime("28-05-2021");
        if ($date_now < $date_target) {
            return redirect()->route("view");
        }
        return $next($request);
    }
}
?>