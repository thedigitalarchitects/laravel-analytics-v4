<?php

namespace Tda\LaravelAnalyticsV4\Tests;

use Tda\LaravelAnalyticsV4\LaravelAnalyticsV4ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAnalyticsV4ServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
