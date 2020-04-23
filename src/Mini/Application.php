<?php

namespace Supen\Alipay\Mini;

use Supen\Alipay\ServiceContainer;

/**
 * Class Application.
 *
 * @property \Supen\Alipay\Mini\Identification\Client   $identification
 * @property \Supen\Alipay\Mini\Manage\Client           $manage
 * @property \Supen\Alipay\Mini\Qrcode\Client           $qrcode
 * @property \Supen\Alipay\Mini\Risk\Client             $risk
 * @property \Supen\Alipay\Mini\TemplateMessage\Client  $templateMessage
 * @property \Supen\Alipay\Mini\Version\Client          $version
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Identification\ServiceProvider::class,
        Manage\ServiceProvider::class,
        Qrcode\ServiceProvider::class,
        Risk\ServiceProvider::class,
        TemplateMessage\ServiceProvider::class,
        Version\ServiceProvider::class,
    ];
}
