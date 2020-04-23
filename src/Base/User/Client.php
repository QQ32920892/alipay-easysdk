<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-12-13 14:50:45
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:37:57
 */

namespace Supen\Alipay\Base\User;

use Supen\Alipay\AlipayAopClient;

class Client extends AlipayAopClient
{
    public function getUserInfoShare(string $accessToken, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $requestService = new \AlipayUserInfoShareRequest();

        $result = $this->alipayAop->execute($requestService, $accessToken, $app_auth_token ?? $this->alipayAop->app_auth_token);

        $responseNode = str_replace(".", "_", $requestService->getApiMethodName()) . "_response";

        return $result->$responseNode;
    }

    /**
     * 获取人脸采集照片及相关信息
     */
    public function getFaceCaptureInfo($bizId, $zimId, $externParam = null, $app_auth_token = null)
    {
        $bizContent = [
            'biz_id'        => $bizId,
            'zim_id'        => $zimId,
            'extern_param'  => [
                'bizType'   => "1"
            ]
        ];

        if ($externParam != null)
            $bizContent['extern_param'] = $externParam;

        $requestService = new \AlipayUserCertifyOpenInitializeRequest();

        $requestService->setBizContent(json_encode($bizContent));

        $result = $this->alipayAop->execute($requestService, null, $app_auth_token ?? $this->alipayAop->app_auth_token);

        $responseNode = str_replace(".", "_", $requestService->getApiMethodName()) . "_response";

        return $result->$responseNode;
    }

    /**
     * 个人认证，初始化认证服务
     */
    public function getRealNameAuthUrl(string $outerOrderNo, array $identityParam, array $merchantConfig, string $bizCode = 'CERT_PHOTO_FACE', string $faceContrastPicture = null, $app_auth_token = null)
    {
        $bizContent = [
            "outer_order_no" => $outerOrderNo,
            "biz_code" => $bizCode,
            "identity_param" => $identityParam,
            "merchant_config" => $merchantConfig,
        ];

        if ($faceContrastPicture != null)
            $bizContent['face_contrast_picture'] = $faceContrastPicture;

        //print_r(array_merge($bizContent,['face_contrast_picture'=>$faceContrastPicture,'appId'=>$this->alipayAop->appId,'app_auth_token'=> $app_auth_token ?? $this->alipayAop->app_auth_token]));

        $requestService = new \AlipayUserCertifyOpenInitializeRequest();


        $requestService->setBizContent(json_encode($bizContent));

        $result = $this->alipayAop->execute($requestService, null, $app_auth_token ?? $this->alipayAop->app_auth_token);

        $responseNode = str_replace(".", "_", $requestService->getApiMethodName()) . "_response";

        $result = $result->$responseNode;

        if ($result->code == 10000) {
            return $this->getAuthCertify($result->certify_id, $app_auth_token ?? $this->alipayAop->app_auth_token);
        }
        return $result;
    }

    /**
     * 身份认证记录查询
     *
     * @param string $certifyId
     * @param string $app_auth_token
     * @return void
     */
    public function checkRealNameAuth($certifyId, $app_auth_token = null)
    {
        $requestService = new \AlipayUserCertifyOpenQueryRequest();
        $requestService->setBizContent(json_encode([
            'certify_id' => $certifyId
        ]));

        $result = $this->alipayAop->execute($requestService, null, $app_auth_token ?? $this->alipayAop->app_auth_token);
        $responseNode = str_replace(".", "_", $requestService->getApiMethodName()) . "_response";

        return $result->$responseNode;
    }

    /**
     * 个人认证，创建开始认证连接
     */
    public function getAuthCertify($certifyId, $app_auth_token = null)
    {
        $bizContent = [
            "certify_id" => $certifyId
        ];

        $requestService = new \AlipayUserCertifyOpenCertifyRequest();

        $requestService->setBizContent(json_encode($bizContent));

        $result = $this->alipayAop->pageExecute($requestService, 'GET', $app_auth_token ?? $this->alipayAop->app_auth_token);

        return ['certify_id' => $certifyId, 'url' => $result];
    }
}
