<?php

namespace Supen\Alipay\Coupon;

use Supen\Alipay\ServiceContainer;

/**
 * Class Application.
 *
 * @property \Supen\Alipay\Mini\Identification\Client   $identification
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Template\ServiceProvider::class,
    ];
}
