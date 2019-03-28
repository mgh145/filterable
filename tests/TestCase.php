<?php

namespace Sedehi\Filterable\Test;

use Sedehi\Filterable\FilterableServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app){

        return [FilterableServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app){

        $app['config']->set('filterable', require __DIR__.'/../config/filterable.php');
    }
}