<?php
/*
 * @Author: Supen.Huang
 * @Date: 2020-02-19 03:23:53
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-19 04:10:38
 */

namespace Supen\Alipay\Zhima\Customer;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['customer'] = function ($app) {
            return new Client($app);
        };
    }
}
