<?php
namespace Phirational\LaravelGeoIP2;

use Illuminate\Support\Facades\Facade;

/**
 * Class GeoIP2Facade
 *
 * @package Phirational\LaravelGeoIP2
 *
 * @method static \GeoIp2\Model\AnonymousIp    anonymousIp(string $ipAddress)
 * @method static \GeoIp2\Model\City           city(string $ipAddress)
 * @method static \GeoIp2\Model\ConnectionType connectionType(string $ipAddress)
 * @method static \GeoIp2\Model\Country        country(string $ipAddress)
 * @method static \GeoIp2\Model\Domain         domain(string $ipAddress)
 * @method static \GeoIp2\Model\Insights       insights(string $ipAddress)
 * @method static \GeoIp2\Model\Isp            isp(string $ipAddress)
 */
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
