<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);
        if (in_array($locale, config('translatable.locales'))) {
            app()->setLocale($locale);
        } else {
            app()->setLocale(config('translatable.fallback_locale'));
        }

        URL::defaults(['locale' => $locale]);
        return $next($request);
    }
}
