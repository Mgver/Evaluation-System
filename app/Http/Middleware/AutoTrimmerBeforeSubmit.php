<?php

namespace App\Http\Middleware;

use Closure;

class AutoTrimmerBeforeSubmit
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
        $request->merge(array_map('trim', $request->all()));
        return $next($request);
        // $input = $request->all();
        // if ($input) {
        //     array_walk_recursive($input, function (&$item) {
        //         $item = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $item)));
        //         $item = ($item == "") ? null : $item;
        //     });

        //     $request->merge($input);
        // }
        // return $next($request);
    }
}