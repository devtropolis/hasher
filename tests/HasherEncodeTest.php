<?php
/**
 * Created by PhpStorm.
 * User: jamiewoods
 * Date: 17/04/2019
 * Time: 11:20
 */

namespace Devtropolis\Hasher\Tests;


use Devtropolis\Hasher\BaseClass;
use Devtropolis\Hasher\Facades\Hasher;

class HasherEncodeTest extends BaseClass
{

    public function test_encode_function() {

        $hashids = new \Hashids\Hashids('test', 10);

        $test_id = $hashids->encode(1);

        $hashed_id = Hasher::encode('test', 1);

        $this->assertEquals($test_id, $hashed_id);
    }

}