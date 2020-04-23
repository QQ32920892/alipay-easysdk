<?php
namespace Supen\Alipay\Base;

use Supen\Alipay\ServiceContainer;
/**
 * Class Application.
 *
 * @property \Supen\Alipay\Base\Rsa\Client             $gateway
 * @property \Supen\Alipay\Base\OAuth\Client           $oauth
 * @property \Supen\Alipay\Base\User\Client            $user
 *
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Rsa\ServiceProvider::class,
        OAuth\ServiceProvider::class,
        User\ServiceProvider::class
    ];
}