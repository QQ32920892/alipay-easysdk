<?php

namespace Supen\Alipay\Base\Rsa;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['rsa'] = function ($app) {
            return new Client($app);
        };
    }
}