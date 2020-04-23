<?php

namespace Supen\Alipay\Mini\Manage;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['manage'] = function ($app) {
            return new Client($app);
        };
    }
}
