<?php
/**
 * Created by PhpStorm.
 * User: jamiewoods
 * Date: 17/04/2019
 * Time: 11:34
 */

namespace Devtropolis\Hasher\Tests;


use Devtropolis\Hasher\BaseClass;
use Devtropolis\Hasher\Hasher\Hasher;

class HasherDecodeTest extends BaseClass
{

    public function test_decode() {
        $hashids = new \Hashids\Hashids('test', 10);

        $test_id = $hashids->encode(1);

        $id = Hasher::decode('test', $test_id);

        $this->assertEquals(1 , $id);
    }

}