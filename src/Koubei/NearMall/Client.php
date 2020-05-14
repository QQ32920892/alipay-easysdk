<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-10-21 01:20:28
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:31:03
 */

namespace Supen\Alipay\Koubei\NearMall;

use Supen\Alipay\AlipayAopClient;

class Client extends AlipayAopClient
{
    public function nearMallQuery(\AlipayMarketingDataNearMallBuilder $requestService, string $app_auth_token = null)
    {
        $request = new \KoubeiMarketingDataNearmallQueryRequest();
        $request->setBizContent(json_encode($requestService->getBizContent()));
        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }
}
