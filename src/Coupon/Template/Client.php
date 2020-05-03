<?php

namespace Supen\Alipay\Coupon\Template;

use Supen\Alipay\AlipayAopClient;

class Client extends AlipayAopClient
{
    /**
     * alipay.marketing.cashitemvoucher.template.create(有资金单品券创建)
     * https://opendocs.alipay.com/apis/api_5/alipay.marketing.cashitemvoucher.template.create
     * 
     * @param AlipayMarketingCashitemvoucherTemplateBuilder $sendContentBuilder
     * @param string $app_auth_token
     * @return void
     */
    public function createCashitemvoucherTemplate(\AlipayMarketingCashitemvoucherTemplateBuilder $sendContentBuilder, string $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $request = new \AlipayMarketingCashitemvoucherTemplateCreateRequest();
        $request->setBizContent($sendContentBuilder->getBizContent());
        return $this->formatResponse($request, $app_auth_token ?? $sendContentBuilder->getAppAuthToken() ?? $this->alipayAop->app_auth_token);
    }

    /**
     * alipay.marketing.cashvoucher.template.create(创建资金券模板)一般指商家全场券
     * https://opendocs.alipay.com/apis/api_5/alipay.marketing.cashlessvoucher.template.create
     * 
     * @param AlipayMarketingCashvoucherTemplateBuilder $sendContentBuilder
     * @param string $app_auth_token
     * @return void
     */
    public function createCashlessvoucherTemplate(\AlipayMarketingCashvoucherTemplateBuilder $sendContentBuilder, string $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $request = new \AlipayMarketingCashlessvoucherTemplateModifyRequest();
        $request->setBizContent($sendContentBuilder->getBizContent());
        return $this->formatResponse($request, $app_auth_token ?? $sendContentBuilder->getAppAuthToken() ?? $this->alipayAop->app_auth_token);
    }

    /**
     * alipay.marketing.cashvoucher.template.create(创建资金券模板)一般指商家全场券
     * https://opendocs.alipay.com/apis/api_5/alipay.marketing.cashvoucher.template.create
     * 
     * @param AlipayMarketingCashvoucherTemplateBuilder $sendContentBuilder
     * @param string $app_auth_token
     * @return void
     */
    public function createCashvoucherTemplate(\AlipayMarketingCashvoucherTemplateBuilder $sendContentBuilder, string $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $request = new \AlipayMarketingCashvoucherTemplateCreateRequest();
        $request->setBizContent($sendContentBuilder->getBizContent());
        return $this->formatResponse($request, $app_auth_token ?? $sendContentBuilder->getAppAuthToken() ?? $this->alipayAop->app_auth_token);
    }

    /**
     * alipay.marketing.voucher.template.delete(删除券模板)
     * https://opendocs.alipay.com/apis/api_5/alipay.marketing.voucher.template.delete
     *
     * @param string $templateId
     * @param string $app_auth_token
     * @return void
     */
    public function deleteCouponTemplate(string $templateId, string $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $request = new \AlipayMarketingVoucherTemplateDeleteRequest();
        $request->setBizContent(json_encode([
            "template_id" => $templateId
        ]));
        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * alipay.marketing.cashvoucher.template.modify(修改券模板)
     * https://opendocs.alipay.com/apis/api_5/alipay.marketing.cashvoucher.template.modify
     *
     * @param \AlipayMarketingCashvoucherTemplateModifyBuilder $sendContentBuilder
     * @param string $app_auth_token
     * @return void
     */
    public function modifyCouponTemplate(\AlipayMarketingCashvoucherTemplateModifyBuilder $sendContentBuilder, string $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $request = new \AlipayMarketingCashvoucherTemplateModifyRequest();
        $request->setBizContent($sendContentBuilder->getBizContent());
        return $this->formatResponse($request, $app_auth_token ?? $sendContentBuilder->getAppAuthToken() ?? $this->alipayAop->app_auth_token);
    }

    /**
     * alipay.marketing.voucher.query(券查询)
     * https://opendocs.alipay.com/apis/api_5/alipay.marketing.voucher.query
     *
     * @param string $templateId 券ID(券唯一标识, 发券接口返回参数) 
     * @param string $app_auth_token
     * @return void
     */
    public function queryCoupon(string $voucherId, string $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $request = new \AlipayMarketingVoucherQueryRequest();
        $request->setBizContent(json_encode([
            "voucher_id" => $voucherId
        ]));
        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * alipay.marketing.voucher.send(发券接口)
     * https://opendocs.alipay.com/apis/api_5/alipay.marketing.voucher.send
     *
     * @return void
     */
    public function sendCoupon(\AlipayMarketingVoucherSendBuilder $sendContentBuilder, string $app_auth_token = null)
    {
        //构造查询业务请求参数对象
        $request = new \AlipayMarketingVoucherSendRequest();
        $request->setBizContent($sendContentBuilder->getBizContent());
        return $this->formatResponse($request, $app_auth_token ?? $sendContentBuilder->getAppAuthToken() ?? $this->alipayAop->app_auth_token);
    }
}
