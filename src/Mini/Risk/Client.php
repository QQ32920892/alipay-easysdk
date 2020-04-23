<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-10-21 01:20:28
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:31:49
 */
namespace Supen\Alipay\Mini\Risk;

use Supen\Alipay\AlipayAopClient;
use Supen\Alipay\AlipayRequest;
use Supen\Alipay\Mini\Model\AlipaySecurityRiskContentDetectContentBuilder;

class Client extends AlipayAopClient
{

    public function detectContent(string $content, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $riskContentBuilder = new AlipaySecurityRiskContentDetectContentBuilder();
        $riskContentBuilder->setContent($content);
        $request = new AlipayRequest ();
        $request->setBizContent($riskContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.security.risk.content.detect");
        return($this->alipayAop->execute($request, NULL, $app_auth_token ?? $this->alipayAop->app_auth_token)) ;
    }

}
