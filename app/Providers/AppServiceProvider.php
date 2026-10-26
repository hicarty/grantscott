<?php

namespace App\Providers;

use App\Portfolio\Portfolio;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Portfolio::class, fn ($app) => new Portfolio(
            $app['config']->get('portfolio', []),
            public_path('images/portfolio'),
        ));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('portfolio', $this->app->make(Portfolio::class));
        });
    }
}
