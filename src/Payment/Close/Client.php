<?php

namespace Supen\Alipay\Payment\Close;

use Supen\Alipay\AlipayAopClient;
use Supen\Alipay\AlipayRequest;
use Supen\Alipay\Payment\Model\AlipayTradeCloseContentBuilder;

class Client extends AlipayAopClient
{
    public function closeOutTradeNo(string $out_trade_no, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $closeContentBuilder = new AlipayTradeCloseContentBuilder();
        $closeContentBuilder->setOutTradeNo($out_trade_no);
        $request = new AlipayRequest ();
        $request->setBizContent($closeContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.close");
        return($this->alipayAop->execute($request, NULL, $app_auth_token ?? $this->alipayAop->app_auth_token)) ;
    }

    public function closeTradeNo(string $trade_no, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $closeContentBuilder = new AlipayTradeCloseContentBuilder();
        $closeContentBuilder->setTradeNo($trade_no);
        $request = new AlipayRequest ();
        $request->setBizContent($closeContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.close");
        return($this->alipayAop->execute($request, NULL, $app_auth_token ?? $this->alipayAop->app_auth_token)) ;
    }
}
