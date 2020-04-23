<?php

namespace Supen\Alipay\Payment\Cancel;

use Supen\Alipay\AlipayAopClient;
use Supen\Alipay\AlipayRequest;
use Supen\Alipay\Payment\Model\AlipayTradeCancelContentBuilder;

class Client extends AlipayAopClient
{
    public function cancelOutTradeNo(string $out_trade_no, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $cancelContentBuilder = new AlipayTradeCancelContentBuilder();
        $cancelContentBuilder->setOutTradeNo($out_trade_no);
        $request = new AlipayRequest ();
        $request->setBizContent($cancelContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.cancel");
        return($this->alipayAop->execute($request, NULL, $app_auth_token ?? $this->alipayAop->app_auth_token)) ;
    }

    public function cancelTradeNo(string $trade_no, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $cancelContentBuilder = new AlipayTradeCancelContentBuilder();
        $cancelContentBuilder->setTradeNo($trade_no);
        $request = new AlipayRequest ();
        $request->setBizContent($cancelContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.cancel");
        return($this->alipayAop->execute($request, NULL, $app_auth_token ?? $this->alipayAop->app_auth_token)) ;
    }
}
