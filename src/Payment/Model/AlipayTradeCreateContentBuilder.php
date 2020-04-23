<?php

namespace Supen\Alipay\Payment\Model;

/* *
 * 功能：alipay.trade.create (统一收单交易关闭接口)业务参数封装
 * api: https://opendocs.alipay.com/apis/api_1/alipay.trade.create/
 */

class AlipayTradeCreateContentBuilder
{

    // 商户订单号.
    private $outTradeNo;

    // 订单标题，粗略描述用户的支付目的。
    private $subject;

    // 订单总金额，整形，此处单位为元，精确到小数点后2位，不能超过1亿元
    private $totalAmount;

    //买家的支付宝唯一用户号（2088开头的16位纯数字)
    private $buyerId;

    //对交易或商品的描述 
    private $body;

    //订单包含的商品列表信息，json格式，其它说明详见：“商品明细说明” 
    private $goodsDetailArr;

    //该笔订单允许的最晚付款时间，逾期将关闭交易。
    //取值范围：1m～15d。m-分钟，h-小时，d-天，1c-当天（1c-当天的情况下，无论交易何时创建，都在0点关闭）。 
    //该参数数值不接受小数点， 如 1.5h，可转换为 90m。 
    private $timeoutExpress;

    //收货人及地址信息 
    private $receiverAddressInfo;

    //系统商编号
    //该参数作为系统商返佣数据提取的依据，请填写系统商签约协议的PID 
    private $sysServiceProviderId;

    //卖家支付宝用户ID。
    //如果该值为空，则默认为商户签约账号对应的支付宝用户ID 
    private $sellerId;

    //可打折金额.
    //参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000]
    //如果该值未传入，但传入了【订单总金额】，【不可打折金额】则该值默认为【订单总金额】-【不可打折金额】 
    private $discountableAmount;

    private $bizContentArr = array();

    private $bizContent = NULL;

    public function getBizContent()
    {
        if (!empty($this->bizContentArr)) {
            $this->bizContent = json_encode($this->bizContentArr, JSON_UNESCAPED_UNICODE);
        }
        return $this->bizContent;
    }

    /**
     * 商户订单号,64个字符以内、只能包含字母、数字、下划线；需保证在商户端不重复
     *
     * @return string
     */
    public function getTradeNo()
    {
        return $this->tradeNo;
    }

    /**
     * 可打折金额
     * 参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000]
     * 如果该值未传入，但传入了【订单总金额】，【不可打折金额】则该值默认为【订单总金额】-【不可打折金额】
     *
     * @param [type] $discountableAmount
     * @return void
     */
    public function setDiscountableAmount($discountableAmount)
    {
        $this->discountableAmount = $discountableAmount;
        $this->bizContentArr['discountable_amount'] = $discountableAmount;
    }

    /**
     * 可打折金额
     *
     * @return string
     */
    public function getDiscountableAmount()
    {
        return $this->discountableAmount;
    }

    /**
     * 卖家支付宝用户ID
     * 如果该值为空，则默认为商户签约账号对应的支付宝用户ID 
     *
     * @param [type] $sellerId
     * @return void
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
        $this->bizContentArr['seller_id'] = $sellerId;
    }

    /**
     * 卖家支付宝用户ID
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    public function setTradeNo($tradeNo)
    {
        $this->tradeNo = $tradeNo;
        $this->bizContentArr['trade_no'] = $tradeNo;
    }

    /**
     * 商户订单号,64个字符以内、只能包含字母、数字、下划线；需保证在商户端不重复
     *
     * @return string
     */
    public function getOutTradeNo()
    {
        return $this->outTradeNo;
    }

    /**
     * 商户订单号,64个字符以内、只能包含字母、数字、下划线；需保证在商户端不重复
     *
     * @param string $outTradeNo
     * @return void
     */
    public function setOutTradeNo(string $outTradeNo)
    {
        $this->outTradeNo = $outTradeNo;
        $this->bizContentArr['out_trade_no'] = $outTradeNo;
    }

    /**
     * 订单标题
     *
     * @param string $subject
     * @return void
     */
    public function setSubject(string $subject)
    {
        $this->subject = $subject;
        $this->bizContentArr['subject'] = $subject;
    }

    /**
     * 订单标题
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * 订单总金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000]
     * 如果同时传入了【打折金额】，【不可打折金额】，【订单总金额】三者，则必须满足如下条件：【订单总金额】=【打折金额】+【不可打折金额】 
     *
     * @param [type] $totalAmount
     * @return void
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        $this->bizContentArr['total_amount'] = $totalAmount;
    }

    /**
     * 订单总金额，单位为元，精确到小数点后两位
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * 买家的支付宝唯一用户号（2088开头的16位纯数字）
     *
     * @return string
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * 买家的支付宝唯一用户号（2088开头的16位纯数字）
     *
     * @param string $buyerId
     * @return void
     */
    public function setBuyerId(string $buyerId)
    {
        $this->buyerId = $buyerId;
        $this->bizContentArr['buyer_id'] = $buyerId;
    }

    /**
     * 对交易或商品的描述
     *
     * @param string $body
     * @return void
     */
    public function setBody(string $body)
    {
        $this->body = $body;
        $this->bizContentArr['body'] = $body;
    }

    /**
     * 对交易或商品的描述
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * 订单包含的商品列表信息，json格式，其它说明详见：“商品明细说明” 
     *
     * @param array $goodsDetailArr
     * @return void
     */
    public function setGoodsDetailArr(array $goodsDetailArr)
    {
        $this->goodsDetailArr = $goodsDetailArr;
        $this->bizContentArr['goods_detail'] = $goodsDetailArr;
    }

    /**
     * 订单包含的商品列表信息，json格式，其它说明详见：“商品明细说明” 
     *
     * @return array
     */
    public function getGoodsDetailArr()
    {
        return $this->goodsDetailArr;
    }

    /**
     * 系统商编号
     * 该参数作为系统商返佣数据提取的依据，请填写系统商签约协议的PID 
     *
     * @param string $sysServiceProviderId
     * @return void
     */
    public function setSysServiceProviderId(string $sysServiceProviderId)
    {
        $this->sysServiceProviderId = $sysServiceProviderId;
        $this->bizContentArr['extend_params'] = [
            'sys_service_provider_id' => $sysServiceProviderId
        ];
    }

    /**
     * 系统商编号
     */
    public function getSysServiceProviderId()
    {
        return $this->sysServiceProviderId;
    }

    /**
     * 该笔订单允许的最晚付款时间，逾期将关闭交易。
     * 取值范围：1m～15d。m-分钟，h-小时，d-天，1c-当天（1c-当天的情况下，无论交易何时创建，都在0点关闭）。
     * 该参数数值不接受小数点， 如 1.5h，可转换为 90m。 
     *
     * @param integer $timeoutExpress
     * @return void
     */
    public function setTimeoutExpress(int $timeoutExpress)
    {
        $this->timeoutExpress = $timeoutExpress;
        $this->bizContentArr['timeout_express'] = $timeoutExpress;
    }

    public function getTimeoutExpress()
    {
        return $this->timeoutExpress;
    }

    public function setReceiverAddressInfo($name, $address)
    {
        $this->receiverAddressInfo = ['name'=>$name,'address'=>$address];
        $this->bizContentArr['receiver_address_info'] = $this->receiverAddressInfo;
    }
}
