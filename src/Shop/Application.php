<?php

namespace Supen\Alipay\Shop;

use Supen\Alipay\ServiceContainer;

/**
 * Class Application.
 *
 * @property \Supen\Alipay\Shop\Store\Client            $store
 * @property \Supen\Alipay\Shop\Product\Client          $product
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Store\ServiceProvider::class,
        Product\ServiceProvider::class,
    ];
}