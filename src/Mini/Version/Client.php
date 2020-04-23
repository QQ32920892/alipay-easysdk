<?php
/*
 * @Author: Supen.Huang
 * @Date: 2020-02-16 22:33:08
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-20 09:50:00
 */

namespace Supen\Alipay\Mini\Version;

use Supen\Alipay\AlipayAopClient;

class Client extends AlipayAopClient
{
    /**
     * 生成体验版
     *
     * @param string $appVersion
     * @param string $app_auth_token
     * @return void
     */
    public function experienceCreate(string $appVersion, string $app_auth_token = null)
    {
        $data = [
            'app_version' => $appVersion,
            'bundle_id' => 'com.alipay.alipaywallet'
        ];
        $requestService = new \AlipayOpenMiniExperienceCreateRequest();
        $requestService->setBizContent(json_encode($data));
        return $this->formatResponse($requestService, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * 取消体验版
     *
     * @param string $appVersion
     * @param string $app_auth_token
     * @return void
     */
    public function experienceCancel(string $appVersion, string $app_auth_token = null)
    {
        $data = [
            'app_version' => $appVersion,
            'bundle_id' => 'com.alipay.alipaywallet'
        ];
        $requestService = new \AlipayOpenMiniExperienceCancelRequest();
        $requestService->setBizContent(json_encode($data));
        return $this->formatResponse($requestService, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * 灰度上架
     *
     * @param string $appVersion
     * @param string $app_auth_token
     * @return void
     */
    public function versionGrayOnline(string $appVersion, string $gray_strategy = 'p10', string $app_auth_token = null)
    {
        $data = [
            'app_version' => $appVersion,
            'gray_strategy' => $gray_strategy,
            'bundle_id' => 'com.alipay.alipaywallet'
        ];
        $requestService = new \AlipayOpenMiniVersionGrayOnlineRequest();
        $requestService->setBizContent(json_encode($data));
        return $this->formatResponse($requestService, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    public function auditApply(\AlipayOpenMiniVersionAuditApplyRequest $requestService, string $app_auth_token = null)
    {
        return $this->formatResponse($requestService, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * 退回开发
     *
     * @param string $appVersion
     * @param string $app_auth_token
     * @return void
     */
    public function auditedCancel(string $appVersion, string $app_auth_token = null)
    {
        $data = [
            'app_version' => $appVersion,
            'bundle_id' => 'com.alipay.alipaywallet'
        ];
        $requestService = new \AlipayOpenMiniVersionAuditedCancelRequest();
        $requestService->setBizContent(json_encode($data));
        return $this->formatResponse($requestService, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * 小程序版本查询
     *
     * @param string $appVersion
     * @param string $app_auth_token
     * @return void
     */
    public function detailQuery(string $appVersion, string $app_auth_token = null)
    {
        $data = [
            'app_version' => $appVersion,
            'bundle_id' => 'com.alipay.alipaywallet'
        ];

        $requestService = new \AlipayOpenMiniVersionDetailQueryRequest();
        $requestService->setBizContent(json_encode($data));

        return $this->formatResponse($requestService, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * 小程序体验版状态查询
     *
     * @param string $appVersion
     * @param string $app_auth_token
     * @return void
     */
    public function experienceQuery(string $appVersion, string $app_auth_token = null)
    {
        $data = [
            'app_version' => $appVersion,
            'bundle_id' => 'com.alipay.alipaywallet'
        ];

        $requestService = new \AlipayOpenMiniExperienceQueryRequest();
        $requestService->setBizContent(json_encode($data));

        return $this->formatResponse($requestService, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }
}
