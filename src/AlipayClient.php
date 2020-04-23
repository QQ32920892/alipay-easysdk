<?php
namespace Supen\Alipay;

use \AopClient;
use \Exception;
use Supen\Alipay\ServiceContainer;

class AlipayClient extends AopClient
{
	public function __construct(ServiceContainer $app)
	{
		$this->gatewayUrl = $app['config']['gateway_url'];
		$this->appId = $app['config']['app_id'];
		$this->rsaPrivateKey = $app['config']['app_private_key'];
		$this->alipayrsaPublicKey = $app['config']['alipay_public_key'];

		$this->apiVersion       = empty($app['config']['apiVersion']) ? '1.0' : $app['config']['apiVersion'];
		$this->signType         = empty($app['config']['signType']) ? "RSA2" : $app['config']['signType'];
		$this->postCharset      = empty($app['config']['postCharset']) ? 'utf-8' : $app['config']['postCharset'];
		$this->format           = empty($app['config']['format']) ? 'json' : $app['config']['format'];
		$this->app_auth_token   = empty($app['config']['app_auth_token']) ? '' : $app['config']['app_auth_token'];
		
		if (empty($this->gatewayUrl) || trim($this->gatewayUrl) == "") {
			throw new Exception("gatewayUrl should not be NULL!");
		}
		if (empty($this->appId) || trim($this->appId) == "") {
			throw new Exception("appId should not be NULL!");
		}
		if (empty($this->rsaPrivateKey) || trim($this->rsaPrivateKey) == "") {
			throw new Exception("rsaPrivateKey should not be NULL!");
		}
		if (empty($this->alipayrsaPublicKey) || trim($this->alipayrsaPublicKey) == "") {
			throw new Exception("alipayPublicKey should not be NULL!");
		}
	}
}
