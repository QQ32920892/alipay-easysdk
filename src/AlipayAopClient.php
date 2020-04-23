<?php
namespace Supen\Alipay;

use Supen\Alipay\ServiceContainer;

class AlipayAopClient
{
    public $config;

    public function getAppId()
    {
        return $this->config['app_auth_appid'] ?? $this->config['app_id'];
    }

    public function __construct(ServiceContainer $app)
    {
        $this->config = $app['config'];
        
        if($app['config']['isCert']){
            $this->alipayAop = new AlipayCertClient($app);
        }else {
            $this->alipayAop = new AlipayClient($app);
        }
    }

    public function formatResponse($requestService,string $app_auth_token = null)
    {
        $result = $this->alipayAop->execute($requestService, null, $app_auth_token ?? $this->alipayAop->app_auth_token);

        $responseNode = str_replace(".", "_", $requestService->getApiMethodName()) . "_response";

        return $result->$responseNode;
    }
}
