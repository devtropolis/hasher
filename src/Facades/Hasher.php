<?php
/**
 * Created by PhpStorm.
 * User: jamiewoods
 * Date: 17/04/2019
 * Time: 11:27
 */

namespace Devtropolis\Hasher\Facades;


use Illuminate\Support\Facades\Facade;

class Hasher extends Facade
{
    protected static function getFacadeAccessor() {
        return 'hasher';
    }

}