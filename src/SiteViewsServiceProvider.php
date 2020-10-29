<?php

namespace Zloadmin\SiteViews;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Zloadmin\SiteViews\SiteViewsMiddleware;

class SiteViewsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('site-views', SiteViewsMiddleware::class);
    }
}
