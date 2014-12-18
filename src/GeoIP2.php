<?php
namespace Phirational\LaravelGeoIP2;

use GeoIp2\Database\Reader;
use GeoIp2\WebService\Client;
use Illuminate\Config\Repository as Config;
use Illuminate\Http\Request;

/**
 * Class GeoIP2
 *
 * @package Phirational\LaravelGeoIP2
 */
class GeoIP2
{
    /** @var \Illuminate\Config\Repository */
    protected $config;

    /** @var \Illuminate\Http\Request */
    protected $request;

    protected $storagePath;
    protected $database;

    /** @var \GeoIp2\ProviderInterface */
    protected $provider;

    private $userId;
    private $licenseKey;

    public function __construct(Config $config, Request $request)
    {
        $this->config = $config;
        $this->request = $request;

        $this->storagePath = realpath($this->config->get('laravel-geoip2::config.storagePath', storage_path('geoip')));
        $this->database = $this->config->get('laravel-geoip2::config.database');

        $this->userId = $this->config->get('laravel-geoip2::config.userId');
        $this->licenseKey = $this->config->get('laravel-geoip2::config.licenseKey');

        if (!empty($this->database)) {
            $this->provider = new Reader(sprintf('%s/%s', $this->storagePath, $this->database));
        } else {
            $this->provider = new Client($this->userId, $this->licenseKey);
        }
    }

    public function __call($name, $arguments)
    {
        $ip = $this->request->getClientIp();
        if (!empty($arguments)) {
            $ip = array_shift($arguments);
        }

        return call_user_func(array($this->provider, $name), $ip);
    }
}
