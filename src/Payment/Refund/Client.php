<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-10-21 01:20:28
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:35:01
 */

namespace Supen\Alipay\Payment\Refund;

use Supen\Alipay\AlipayAopClient;
use Supen\Alipay\AlipayRequest;
use Supen\Alipay\Payment\Model\AlipayTradeRefundContentBuilder;

class Client extends AlipayAopClient
{
    public function refund(string $out_trade_no,string $refund_amount, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $refundContentBuilder = new AlipayTradeRefundContentBuilder();
        $refundContentBuilder->setOutTradeNo($out_trade_no);
        $refundContentBuilder->setRefundAmount($refund_amount);
        $request = new AlipayRequest ();
        $request->setBizContent($refundContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.refund");
        return($this->alipayAop->execute($request, NULL, $app_auth_token ?? $this->alipayAop->app_auth_token)) ;
    }
}
