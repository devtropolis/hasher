<?php

namespace Devtropolis\Hasher\Hasher;


use Symfony\Component\HttpKernel\Exception\HttpException;

class Hasher
{
    public static function encode($salt, ...$args)
    {
        $hashids = new \Hashids\Hashids($salt, 10);

        $id = $hashids->encode(...$args);

        return $id;
    }

    public static function decode($salt, $enc)
    {

        $hashids = new \Hashids\Hashids($salt, 10);

        if (!$hashids->decode($enc)) {
            abort(404);
        }

        $id = $hashids->decode($enc)[0];

        return $id;
    }

}