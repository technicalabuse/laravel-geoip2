<?php
namespace Phirational\LaravelGeoIP2;

use Illuminate\Support\Facades\Facade;

class GeoIP2Facade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'geoip2';
    }
}
