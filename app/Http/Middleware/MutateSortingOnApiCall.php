<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MutateSortingOnApiCall
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->has('sort') && $request->has('sortDesc')) {
            $sortDesc = $request->get('sortDesc');
            if ($sortDesc === 'true') {
                $request->merge(['sort' => "-{$request->get('sort')}"]);
            }
        }

        return $next($request);
    }
}
