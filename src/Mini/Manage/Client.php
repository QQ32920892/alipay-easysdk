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
    /**
     * 查询小程序类目
     *
     * @param boolean $isFilter
     * @param string $app_auth_token
     * @return void
     */
    public function categoryQuery(bool $isFilter = true, string $app_auth_token = null)
    {
        $requestService = new \AlipayOpenMiniCategoryQueryRequest();
        $requestService->setBizContent(json_encode(['is_filter' => $isFilter]));
        return $this->formatResponse($requestService, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * 修改小程序基本信息
     */
    public function baseInfoModify(\AlipayOpenMiniBaseinfoModifyRequest $requestService, string $app_auth_token = null)
    {
        return $this->formatResponse($requestService, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * 查询小程序基本信息
     */
    public function baseInfoQuery(string $app_auth_token = null)
    {
        $requestService = new \AlipayOpenMiniBaseinfoQueryRequest();
        return $this->formatResponse($requestService, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }
}
