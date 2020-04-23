<?php
/*
 * @Author: Supen.Huang
 * @Date: 2020-02-14 01:13:42
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-20 10:52:57
 */
namespace Supen\Alipay;

use \AopCertClient;
use \Exception;
use Supen\Alipay\ServiceContainer;

class AlipayCertClient extends AopCertClient
{
    public function __construct(ServiceContainer $app)
	{
        $this->gatewayUrl		= $app['config']['gateway_url'];
		$this->appId			= $app['config']['app_id'];
		$this->rsaPrivateKey	= $app['config']['app_private_key'];
		$this->alipayrsaPublicKey = $this->getPublicKey($app['config']['alipay_cert_public_path']);

		$this->apiVersion		= empty($app['config']['apiVersion']) ? '1.0' : $app['config']['apiVersion'];
		$this->signType			= empty($app['config']['signType']) ? "RSA2" : $app['config']['signType'];
		$this->postCharset		= empty($app['config']['postCharset']) ? 'utf-8' : $app['config']['postCharset'];
		$this->format			= empty($app['config']['format']) ? 'json' : $app['config']['format'];
		$this->app_auth_token	= empty($app['config']['app_auth_token']) ? '' : $app['config']['app_auth_token'];

        $this->isCheckAlipayPublicCert = true;//是否校验自动下载的支付宝公钥证书，如果开启校验要保证支付宝根证书在有效期内
        $this->appCertSN = $this->getCertSN($app['config']['app_cert_public_path']);//调用getCertSN获取证书序列号
        $this->alipayRootCertSN = $this->getRootCertSN($app['config']['alipay_root_cert_path']);//调用getRootCertSN获取支付宝根证书序列号

		if (empty($this->gatewayUrl) || trim($this->gatewayUrl) == "") {
			throw new Exception("gatewayUrl should not be NULL!");
		}
		if (empty($this->appId) || trim($this->appId) == "") {
			throw new Exception("appId should not be NULL!");
        }
		if (empty($this->rsaPrivateKey) || trim($this->rsaPrivateKey) == "") {
			throw new Exception("rsaPrivateKey should not be NULL!");
		}
        if(!file_exists($app['config']['alipay_cert_public_path'])) {
			throw new Exception("alipay_cert_public_path cert not exists!");
        }
		if (empty($this->alipayrsaPublicKey) || trim($this->alipayrsaPublicKey) == "") {
			throw new Exception("alipayPublicKey should not be NULL!");
		}
        if(!file_exists($app['config']['app_cert_public_path'])) {
			throw new Exception("app_cert_public_path cert not exists!");
        }
        if(!file_exists($app['config']['alipay_root_cert_path'])) {
			throw new Exception("alipay_root_cert_path cert not exists!");
        }
	}
}
