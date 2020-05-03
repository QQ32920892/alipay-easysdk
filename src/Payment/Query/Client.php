<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-10-21 01:20:28
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:34:48
 */

namespace Supen\Alipay\Payment\Query;

use Supen\Alipay\AlipayAopClient;
use Supen\Alipay\AlipayRequest;
use Supen\Alipay\Payment\Model\AlipayTradeQueryContentBuilder;

class Client extends AlipayAopClient
{
    public function queryOutTradeNo(string $out_trade_no, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $queryContentBuilder = new AlipayTradeQueryContentBuilder();
        $queryContentBuilder->setOutTradeNo($out_trade_no);
        $request = new AlipayRequest();
        $request->setBizContent($queryContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.query");
        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    public function queryTradeNo(string $trade_no, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $queryContentBuilder = new AlipayTradeQueryContentBuilder();
        $queryContentBuilder->setTradeNo($trade_no);
        $request = new AlipayRequest();
        $request->setBizContent($queryContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.query");
        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * alipay.marketing.facetoface.decode.use(当面付付款码解码)
     * https://opendocs.alipay.com/apis/api_5/alipay.marketing.facetoface.decode.use
     *
     * @param string $dynamicId 付款码码值 
     * @param string $senceNo
     * @param string $app_auth_token
     * @return void
     */
    public function facetofaceDecodeUse(string $dynamicId, string $senceNo, string $app_auth_token = null)
    {
        $request = new \AlipayMarketingFacetofaceDecodeUseRequest();
        $request->setBizContent(json_encode([
            "dynamic_id" => $dynamicId,
            "sence_no" => $senceNo,
        ]));
        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }
}
