<?php
/**
 * Created by PhpStorm.
 * User: jamiewoods
 * Date: 17/04/2019
 * Time: 11:24
 */

namespace Devtropolis\Hasher;


use Devtropolis\Hasher\Hasher\Hasher;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class HasherServiceProvider extends ServiceProvider
{

    public function boot() {

    }

    public function register()
    {
        $this->app->bind('hasher', function () {
            return new Hasher();
        });
    }
}