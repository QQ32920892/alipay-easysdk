<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-12-13 09:08:50
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-20 11:12:31
 */

namespace Supen\Alipay\Base\OAuth;

use Supen\Alipay\AlipayAopClient;

class Client extends AlipayAopClient
{
    public function getToken(string $grant_type, string $code, string $refresh_token = '', $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $requestService = new \AlipaySystemOauthTokenRequest();
        $requestService->setGrantType($grant_type);
        $requestService->setCode($code);
        $requestService->setRefreshToken($refresh_token);

        $result = $this->alipayAop->execute($requestService, null, $app_auth_token ?? $this->alipayAop->app_auth_token);

        if (isset($result->error_response)) {
            return $result;
        }

        $responseNode = str_replace(".", "_", $requestService->getApiMethodName()) . "_response";

        return $result->$responseNode;
    }

    public function getAppAuthToken(string $code, string $grant_type = 'authorization_code', string $refresh_token = null, $app_auth_token = null)
    {
        $requestService = new \AlipayOpenAuthTokenAppRequest();
        $requestService->setBizContent(json_encode([
            'grant_type' => $grant_type,
            'code' => $code,
            'refresh_token' => $refresh_token
        ]));

        if ($refresh_token != null) {
            $requestService['refresh_token'] = $refresh_token;
        }

        $result = $this->alipayAop->execute($requestService, null, $app_auth_token ?? $this->alipayAop->app_auth_token);

        if (isset($result->error_response)) {
            return $result;
        }

        $responseNode = str_replace(".", "_", $requestService->getApiMethodName()) . "_response";

        return $result->$responseNode;
    }
}
