# GeoIP2 for Laravel

[![Latest Version](https://img.shields.io/github/release/Phirational/laravel-geoip2.svg?style=flat-square)](https://github.com/Phirational/laravel-geoip2/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/Phirational/laravel-geoip2/master.svg?style=flat-square)](https://travis-ci.org/Phirational/laravel-geoip2)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/Phirational/laravel-geoip2.svg?style=flat-square)](https://scrutinizer-ci.com/g/Phirational/laravel-geoip2/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/Phirational/laravel-geoip2.svg?style=flat-square)](https://scrutinizer-ci.com/g/Phirational/laravel-geoip2)
[![Code Climate](http://img.shields.io/codeclimate/github/Phirational/laravel-geoip2.svg?style=flat-square)](https://codeclimate.com/github/Phirational/laravel-geoip2)
[![Total Downloads](https://img.shields.io/packagist/dt/phirational/laravel-geoip2.svg?style=flat-square)](https://packagist.org/packages/phirational/laravel-geoip2)


## Install

Via Composer

``` bash
$ composer require league/skeleton
```

``` php
'providers' => array(
    'Phirational\LaravelGeoIP2\GeoIP2ServiceProvider',
)
```

``` php
'aliases' => array(
    'GeoIP2' => 'Phirational\LaravelGeoIP2\GeoIP2Facade',
)
```

``` php
$ php artisan config:publish phirational/laravel-geoip2
```
