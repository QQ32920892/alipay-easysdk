<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-10-21 01:20:28
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:34:01
 */

namespace Supen\Alipay\Payment\Create;

use Supen\Alipay\AlipayAopClient;
use Supen\Alipay\AlipayRequest;
use Supen\Alipay\Payment\Model\AlipayTradeCreateContentBuilder;

class Client extends AlipayAopClient
{
    // public function create(string $subject, string $out_trade_no, string $total_amount, string $buyer_id, $app_auth_token = null)
    public function create(AlipayTradeCreateContentBuilder $createContentBuilder, $notifyUrl = null)
    {
        //构造查询业务请求参数对象
        // $createContentBuilder = new AlipayTradeCreateContentBuilder();
        // $createContentBuilder->setSubject($subject);
        // $createContentBuilder->setOutTradeNo($out_trade_no);
        // $createContentBuilder->setTotalAmount($total_amount);
        // $createContentBuilder->setBuyerId($buyer_id);
        
        $request = new AlipayRequest();
        $request->setNotifyUrl($notifyUrl ?? $this->config['notify_url']);
        $request->setBizContent($createContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.trade.create");
        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }
}
