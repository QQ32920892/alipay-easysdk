<?php
/*
 * @Author: Supen.Huang
 * @Date: 2019-10-21 01:20:28
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:32:42
 */

namespace Supen\Alipay\Mini\TemplateMessage;

use Supen\Alipay\AlipayAopClient;
use Supen\Alipay\AlipayRequest;
use Supen\Alipay\Mini\Model\AlipayOpenAppMiniTemplatemessageSendContentBuilder;

class Client  extends AlipayAopClient
{
    public function send(string $to_user_id, string $form_id, string $user_template_id, string $page, string $data, $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $sendContentBuilder = new AlipayOpenAppMiniTemplatemessageSendContentBuilder();
        $sendContentBuilder->setToUserId($to_user_id);
        $sendContentBuilder->setFormId($form_id);
        $sendContentBuilder->setUserTemplateId($user_template_id);
        $sendContentBuilder->setPage($page);
        $sendContentBuilder->setData($data);
        $request = new AlipayRequest();
        $request->setBizContent($sendContentBuilder->getBizContent());
        $request->setApiMethodName("alipay.open.app.mini.templatemessage.send");
        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }
}
