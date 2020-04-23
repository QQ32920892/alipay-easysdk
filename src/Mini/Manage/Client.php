<?php
/*
 * @Author: Supen.Huang
 * @Date: 2020-02-16 22:33:08
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-20 09:50:00
 */

namespace Supen\Alipay\Mini\Manage;

use Supen\Alipay\AlipayAopClient;

class Client extends AlipayAopClient
{
    public function categoryQuery(bool $isFilter = true, string $app_auth_token = null)
    {
        $requestService = new \AlipayOpenMiniCategoryQueryRequest();
        $requestService->setBizContent(json_encode(['is_filter' => $isFilter]));
        $result = $this->alipayAop->execute($requestService, null, $app_auth_token ?? $this->alipayAop->app_auth_token);

        $responseNode = str_replace(".", "_", $requestService->getApiMethodName()) . "_response";
        
        return $result->$responseNode;
    }
}
