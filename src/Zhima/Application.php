<?php

namespace Supen\Alipay\Zhima;

use Supen\Alipay\ServiceContainer;

/**
 * Class Application.
 *
 * @property \Supen\Alipay\Zhima\Customer\Client    $Customer
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Customer\ServiceProvider::class,
    ];
}
