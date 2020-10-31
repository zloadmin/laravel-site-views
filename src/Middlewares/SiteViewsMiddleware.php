<?php

namespace SiteViews\Middlewares;

use Closure;
use SiteViews\Models\SiteView;

class SiteViewsMiddleware
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
        SiteView::add($request);
        return $next($request);
    }
}
