<?php
/**
 * Created by PhpStorm.
 * User: jamiewoods
 * Date: 17/04/2019
 * Time: 11:35
 */

namespace Devtropolis\Hasher\Tests;


use Devtropolis\Hasher\BaseClass;
use Devtropolis\Hasher\Facades\Hasher;

class HasherErrorDecodeTest extends BaseClass
{

    public function test_error_is_thrown() {
        $this->expectException('Symfony\Component\HttpKernel\Exception\HttpException');
        Hasher::decode('dsdssdw223', 'ds2eds');
    }

    public function test_error_if_decoding_int() {
        $this->expectException('Symfony\Component\HttpKernel\Exception\HttpException');
        Hasher::decode('dsdssdw223', 1);
    }

}