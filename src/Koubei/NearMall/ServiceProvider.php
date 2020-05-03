<?php

namespace Supen\Alipay\Koubei\NearMall;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['nearmall'] = function ($app) {
            return new Client($app);
        };
    }
}
