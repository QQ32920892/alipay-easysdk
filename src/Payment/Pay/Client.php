<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-10-21 01:20:28
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:34:28
 */

namespace Supen\Alipay\Payment\Pay;

use Supen\Alipay\AlipayAopClient;
use Supen\Alipay\AlipayRequest;
use Supen\Alipay\Payment\Model\AlipayTradePayContentBuilder;

class Client extends AlipayAopClient
{
    public function pay(string $subject, string $out_trade_no, string $total_amount, string $auth_code, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $payContentBuilder = new AlipayTradePayContentBuilder();
        $payContentBuilder->setSubject($subject);
        $payContentBuilder->setOutTradeNo($out_trade_no);
        $payContentBuilder->setTotalAmount($total_amount);
        $payContentBuilder->setScene("bar_code");
        $payContentBuilder->setAuthCode($auth_code);
        $request = new AlipayRequest();
        $request->setBizContent($payContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.pay");
        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }
}
