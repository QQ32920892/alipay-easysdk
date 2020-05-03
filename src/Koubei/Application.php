<?php

namespace Supen\Alipay\Koubei;

use Supen\Alipay\ServiceContainer;

/**
 * Class Application.
 *
 * @property \Supen\Alipay\Koubei\NearMall\Client   $nearMall
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        NearMall\ServiceProvider::class,
    ];
}
