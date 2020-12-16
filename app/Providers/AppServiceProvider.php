<?php

namespace App\Providers;

use App\View\Components\RangeAgreementDisagreement;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $uri)
    {
        Blade::component('range-agreement-disagreement', RangeAgreementDisagreement::class);
        if (env('REDIRECT_HTTPS')) {
            $uri->formatScheme('https://');
        }
    }
}
