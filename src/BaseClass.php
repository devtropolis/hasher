<?php
/**
 * Created by PhpStorm.
 * User: jamiewoods
 * Date: 16/04/2019
 * Time: 16:18
 */

namespace Devtropolis\Hasher;


use Orchestra\Testbench\TestCase as OrchestraTestCase;

class BaseClass extends OrchestraTestCase
{


    protected function getPackageProviders($app)
    {
        return [HasherServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app) {
        $app['config']->set('app.key', 'AckfSECXIvnK5r28GVIWUAxmbBSjTsmF');

        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);

        $app['config']->set('database.default', 'testbench');

    }


}