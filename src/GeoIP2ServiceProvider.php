<?php namespace Phirational\LaravelGeoIP2;

use Illuminate\Support\ServiceProvider;

class GeoIP2ServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('phirational/laravel-geoip2', null, __DIR__);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['geoip2'] = $this->app->share(function ($app) {
            return new GeoIP2($app['config'], $app['request']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('geoip2');
    }
}
