<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        if (now()->format('s') % 2 == 0) {
            //dd('teste' . now()->format('s'));
        } else {
            return response('vous ave pas le droit de visier car la seconde actuelle  n\'est pas impaire ');
            return redirect('/');
        }

        return $next($request);
    }
}