<?php

namespace Supen\Alipay\Payment;

use Supen\Alipay\ServiceContainer;

/**
 * Class Application.
 *
 * @property \Supen\Alipay\Payment\Cancel\Client            $cancel
 * @property \Supen\Alipay\Payment\Close\Client             $close
 * @property \Supen\Alipay\Payment\Create\Client            $create
 * @property \Supen\Alipay\Payment\Pay\Client               $pay
 * @property \Supen\Alipay\Payment\Query\Client             $query
 * @property \Supen\Alipay\Payment\Refund\Client            $refund
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Cancel\ServiceProvider::class,
        Close\ServiceProvider::class,
        Create\ServiceProvider::class,
        Pay\ServiceProvider::class,
        Query\ServiceProvider::class,
        Refund\ServiceProvider::class,
    ];
}
