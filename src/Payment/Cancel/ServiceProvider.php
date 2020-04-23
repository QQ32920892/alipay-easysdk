<?php

namespace Supen\Alipay\Payment\Cancel;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['cancel'] = function ($app) {
            return new Client($app);
        };
    }
}
