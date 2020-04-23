<?php

namespace Supen\Alipay\Mini\Version;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['version'] = function ($app) {
            return new Client($app);
        };
    }
}
