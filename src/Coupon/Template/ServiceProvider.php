<?php

namespace Supen\Alipay\Coupon\Template;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['template'] = function ($app) {
            return new Client($app);
        };
    }
}
