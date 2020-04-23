<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-10-21 01:20:28
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:31:57
 */

namespace Supen\Alipay\Mini\Qrcode;

use Supen\Alipay\AlipayAopClient;
use Supen\Alipay\AlipayRequest;
use Supen\Alipay\Mini\Model\AlipayOpenAppQrcodeCreateContentBuilder;

class Client extends AlipayAopClient
{

    public function create(string $url_param,string $query_param,string $describe, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $qrcodeContentBuilder = new AlipayOpenAppQrcodeCreateContentBuilder();
        $qrcodeContentBuilder->setUrlParam($url_param);
        $qrcodeContentBuilder->setQueryParam($query_param);
        $qrcodeContentBuilder->setDescribe($describe);
        $request = new AlipayRequest ();
        $request->setBizContent($qrcodeContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.open.app.qrcode.create");
        return($this->alipayAop->execute($request, NULL, $app_auth_token ?? $this->alipayAop->app_auth_token)) ;
    }

}
