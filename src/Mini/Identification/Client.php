<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-10-21 01:20:28
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:31:03
 */

namespace Supen\Alipay\Mini\Identification;

use Supen\Alipay\AlipayAopClient;
use Supen\Alipay\AlipayRequest;
use Supen\Alipay\Mini\Model\ZolozIdentificationCustomerCertifyzhubQueryContentBuilder;
use Supen\Alipay\Mini\Model\ZolozIdentificationUserWebQueryContentBuilder;

class Client extends AlipayAopClient
{
    public function queryCertifyzhub(string $biz_id, string $zim_id, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $zhubQueryContentBuilder = new ZolozIdentificationCustomerCertifyzhubQueryContentBuilder();
        $zhubQueryContentBuilder->setBizId($biz_id);
        $zhubQueryContentBuilder->setZimId($zim_id);
        $zhubQueryContentBuilder->setFaceType(2);
        $request = new AlipayRequest();
        $request->setBizContent($zhubQueryContentBuilder->getBizContent());
        $request->setApiMethodName("zoloz.identification.customer.certifyzhub.query");
        return ($this->alipayAop->execute($request, NULL, $app_auth_token ?? $this->alipayAop->app_auth_token));
    }

    public function queryUserWeb(string $biz_id, string $zim_id, string $extern_param, $app_auth_token)
    {
        //构造查询业务请求参数对象
        $userWebQueryContentBuilder = new ZolozIdentificationUserWebQueryContentBuilder();
        $userWebQueryContentBuilder->setBizId($biz_id);
        $userWebQueryContentBuilder->setZimId($zim_id);
        $userWebQueryContentBuilder->setExternParam($extern_param);
        $request = new AlipayRequest();
        $request->setBizContent($userWebQueryContentBuilder->getBizContent());
        $request->setApiMethodName("zoloz.identification.user.web.query");
        return ($this->alipayAop->execute($request, NULL, $app_auth_token ?? $this->alipayAop->app_auth_token));
    }
}
