<?php

require_once 'ContentBuilder.php';

/**
 * alipay.marketing.cashlessvoucher.template.create(无资金券模板创建接口)
 * https://opendocs.alipay.com/apis/api_5/alipay.marketing.cashlessvoucher.template.create
 */
class AlipayMarketingCashlessvoucherTemplateBuilder extends ContentBuilder
{
    /**
     * 业务数据
     */
    private $bizContentarr = array();

    public function getBizContent()
    {
        return $this->bizContentarr;
    }

    /**
     * 有资金单品券券类型，目前仅支持
     * 有资金单品代金券（ITEM_BALANCE_FIX_VOUCHER）、
     * 有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）、
     * 有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER） 
     */
    private $_VoucherType;
    
    /**
     * 有资金单品券券类型，目前仅支持
     * 有资金单品代金券（ITEM_BALANCE_FIX_VOUCHER）、
     * 有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）、
     * 有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER） 
     */
    public function getVoucherType() {
        return $this->_VoucherType;
    }
    /**
     * 有资金单品券券类型，目前仅支持
     * 有资金单品代金券（ITEM_BALANCE_FIX_VOUCHER）、
     * 有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）、
     * 有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER） 
     */
    public function setVoucherType($_VoucherType) {
        $this->_VoucherType = $_VoucherType;
        $this->bizContentarr['voucher_type'] = $_VoucherType;
    }
    
    /**
     * 商家品牌名称。最多12个字符 商户自定义，在通用模板中展示在券LOGO下方。根据券使用场景的不同，该信息的展示位置可能会有不同。  
     */
    private $_BrandName;
    
    /**
     * 商家品牌名称。最多12个字符 商户自定义，在通用模板中展示在券LOGO下方。根据券使用场景的不同，该信息的展示位置可能会有不同。  
     */
    public function getBrandName() {
        return $this->_BrandName;
    }
    
    /**
     * 商家品牌名称。最多12个字符 商户自定义，在通用模板中展示在券LOGO下方。根据券使用场景的不同，该信息的展示位置可能会有不同。  
     */
    public function setBrandName($_BrandName) {
        $this->_BrandName = $_BrandName;
        $this->bizContentarr['brand_name'] = $_BrandName;
    }

    /**
     * 发放开始时间，早于该时间不能发券。
     * 发放开始时间不能大于当前时间15天。格式为：yyyy-MM-dd HH:mm:ss 
     */
    private $_PublishStartTime;
    
    /**
     * 发放开始时间，早于该时间不能发券。
     * 发放开始时间不能大于当前时间15天。格式为：yyyy-MM-dd HH:mm:ss 
     */
    public function getPublishStartTime() {
        return $this->_PublishStartTime;
    }
    
    /**
     * 发放开始时间，早于该时间不能发券。
     * 发放开始时间不能大于当前时间15天。格式为：yyyy-MM-dd HH:mm:ss 
     */
    public function setPublishStartTime($_PublishStartTime) {
        $this->_PublishStartTime = $_PublishStartTime;
        $this->bizContentarr['publish_start_time'] = $_PublishStartTime;
    }
    
    /**
     * 发放结束时间，晚于该时间不能发券。
     * 券的发放结束时间和发放开始时间跨度不能大于90天。发放结束时间必须晚于发放开始时间。格式为：yyyy-MM-dd HH:mm:ss 
     */
    private $_PublishEndTime;
    
    /**
     * 发放结束时间，晚于该时间不能发券。
     * 券的发放结束时间和发放开始时间跨度不能大于90天。发放结束时间必须晚于发放开始时间。格式为：yyyy-MM-dd HH:mm:ss 
     */
    public function getPublishEndTime() {
        return $this->_PublishEndTime;
    }
    
    /**
     * 发放结束时间，晚于该时间不能发券。
     * 券的发放结束时间和发放开始时间跨度不能大于90天。发放结束时间必须晚于发放开始时间。格式为：yyyy-MM-dd HH:mm:ss 
     */
    public function setPublishEndTime($_PublishEndTime) {
        $this->_PublishEndTime = $_PublishEndTime;
        $this->bizContentarr['publish_end_time'] = $_PublishEndTime;
    }

    /**
     * 券有效期。有两种类型：绝对时间和相对时间。使用JSON字符串表示。
     * 绝对时间有3个key：type、start、end，type取值固定为"ABSOLUTE"
     * start和end分别表示券生效时间和失效时间，格式为yyyy-MM-dd HH:mm:ss。
     * 绝对时间示例：{"type": "ABSOLUTE", "start": "2017-01-10 00:00:00", "end": "2017-01-13 23:59:59"}。
     * 相对时间有3个key：type、duration、unit，type取值固定为"RELATIVE"，duration表示从发券时间开始到往后推duration个单位时间为止作为券的使用有效期。
     * unit表示有效时间单位，有效时间单位可枚举：MINUTE, HOUR, DAY。
     * 示例：{"type": "RELATIVE", "duration": 1 , "unit": "DAY" }
     * 如果此刻发券，那么该券从现在开始生效1(duration)天(unit)后失效。 
     */
    private $_VoucherValidPeriod;
    
    /**
     * 券有效期。有两种类型：绝对时间和相对时间。使用JSON字符串表示。
     * 绝对时间有3个key：type、start、end，type取值固定为"ABSOLUTE"
     * start和end分别表示券生效时间和失效时间，格式为yyyy-MM-dd HH:mm:ss。
     * 绝对时间示例：{"type": "ABSOLUTE", "start": "2017-01-10 00:00:00", "end": "2017-01-13 23:59:59"}。
     * 相对时间有3个key：type、duration、unit，type取值固定为"RELATIVE"，duration表示从发券时间开始到往后推duration个单位时间为止作为券的使用有效期。
     * unit表示有效时间单位，有效时间单位可枚举：MINUTE, HOUR, DAY。
     * 示例：{"type": "RELATIVE", "duration": 1 , "unit": "DAY" }
     * 如果此刻发券，那么该券从现在开始生效1(duration)天(unit)后失效。 
     */
    public function getVoucherValidPeriod() {
        return $this->_VoucherValidPeriod;
    }
    
    /**
     * 券有效期。有两种类型：绝对时间和相对时间。使用JSON字符串表示。
     * 绝对时间有3个key：type、start、end，type取值固定为"ABSOLUTE"
     * start和end分别表示券生效时间和失效时间，格式为yyyy-MM-dd HH:mm:ss。
     * 绝对时间示例：{"type": "ABSOLUTE", "start": "2017-01-10 00:00:00", "end": "2017-01-13 23:59:59"}。
     * 相对时间有3个key：type、duration、unit，type取值固定为"RELATIVE"，duration表示从发券时间开始到往后推duration个单位时间为止作为券的使用有效期。
     * unit表示有效时间单位，有效时间单位可枚举：MINUTE, HOUR, DAY。
     * 示例：{"type": "RELATIVE", "duration": 1 , "unit": "DAY" }
     * 如果此刻发券，那么该券从现在开始生效1(duration)天(unit)后失效。 
     */
    public function setVoucherValidPeriod($_VoucherValidPeriod) {
        $this->_VoucherValidPeriod = $_VoucherValidPeriod;
        $this->bizContentarr['voucher_valid_period'] = $_VoucherValidPeriod;
    }

    /**
     * 外部业务单号。用作幂等控制。
     * 同一个pid下相同的外部业务单号作唯一键。 
     */
    private $_OutBizNo;
    
    /**
     * 外部业务单号。用作幂等控制。
     * 同一个pid下相同的外部业务单号作唯一键。 
     */
    public function getOutBizNo() {
        return $this->_OutBizNo;
    }
    
    /**
     * 外部业务单号。用作幂等控制。
     * 同一个pid下相同的外部业务单号作唯一键。 
     */
    public function setOutBizNo($_OutBizNo) {
        $this->_OutBizNo = $_OutBizNo;
        $this->bizContentarr['out_biz_no'] = $_OutBizNo;
    }

    /**
     * 券使用说明。JSON数组字符串，最多可以有10条，每条最多50字。
     * 必须写明券的使用条件、领取条件、退款规则，请参考示例； 
     */
    private $_VoucherDescription;
    
    /**
     * 券使用说明。JSON数组字符串，最多可以有10条，每条最多50字。
     * 必须写明券的使用条件、领取条件、退款规则，请参考示例； 
     */
    public function getVoucherDescription() {
        return $this->_VoucherDescription;
    }
    
    /**
     * 券使用说明。JSON数组字符串，最多可以有10条，每条最多50字。
     * 必须写明券的使用条件、领取条件、退款规则，请参考示例； 
     */
    public function setVoucherDescription($_VoucherDescription) {
        $this->_VoucherDescription = $_VoucherDescription;
        $this->bizContentarr['voucher_description'] = $_VoucherDescription;
    }

    /**
     * 券发放数量
     */
    private $_VoucherQuantity;
    
    /**
     * 券发放数量
     */
    public function getVoucher_quantity() {
        return $this->_VoucherQuantity;
    }
    
    /**
     * 券发放数量
     */
    public function setVoucher_quantity($_VoucherQuantity) {
        $this->_VoucherQuantity = $_VoucherQuantity;
        $this->bizContentarr['voucher_quantity'] = $_VoucherQuantity;
    }

    /**
     * 代金券面额。
     * 当voucher_type为有资金单品代金券（ITEM_BALANCE_FIX_VOUCHER）时必选。
     * 币种为人民币，单位为元。该数值不能小于0.1，且不能大于999元，代表订单金额达到使用门槛后，本券可抵扣相应面额资金。
     * 代金券面额以门槛消费金额为基准，换算成折扣，不能低于9.95折。
     * 当voucher_type为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）和有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时此值必须为空。
     */
    private $_Amount;
    
    /**
     * 代金券面额。
     * 当voucher_type为有资金单品代金券（ITEM_BALANCE_FIX_VOUCHER）时必选。
     * 币种为人民币，单位为元。该数值不能小于0.1，且不能大于999元，代表订单金额达到使用门槛后，本券可抵扣相应面额资金。
     * 代金券面额以门槛消费金额为基准，换算成折扣，不能低于9.95折。
     * 当voucher_type为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）和有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时此值必须为空。
     */
    public function getAmount() {
        return $this->_Amount;
    }
    
    /**
     * 代金券面额。
     * 当voucher_type为有资金单品代金券（ITEM_BALANCE_FIX_VOUCHER）时必选。
     * 币种为人民币，单位为元。该数值不能小于0.1，且不能大于999元，代表订单金额达到使用门槛后，本券可抵扣相应面额资金。
     * 代金券面额以门槛消费金额为基准，换算成折扣，不能低于9.95折。
     * 当voucher_type为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）和有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时此值必须为空。
     */
    public function setAmount($_Amount) {
        $this->_Amount = $_Amount;
        $this->bizContentarr['amount'] = $_Amount;
    }

    /**
     * 券总金额（仅用于不定额券）。
     * 币种为人民币，单位为元。
     * 该数值需大于等于1，小于等于10,000,000，小数点以后最多保留两位。
     * voucher_type为CASHLESS_RANDOM_VOUCHER时必填。 
     */
    private $_TotalAmount;
    
    /**
     * 券总金额（仅用于不定额券）。
     * 币种为人民币，单位为元。
     * 该数值需大于等于1，小于等于10,000,000，小数点以后最多保留两位。
     * voucher_type为CASHLESS_RANDOM_VOUCHER时必填。 
     */
    public function getTotalAmount() {
        return $this->_TotalAmount;
    }
    
    /**
     * 券总金额（仅用于不定额券）。
     * 币种为人民币，单位为元。
     * 该数值需大于等于1，小于等于10,000,000，小数点以后最多保留两位。
     * voucher_type为CASHLESS_RANDOM_VOUCHER时必填。 
     */
    public function setTotalAmount($_TotalAmount) {
        $this->_TotalAmount = $_TotalAmount;
        $this->bizContentarr['total_amount'] = $_TotalAmount;
    }

    /**
     * 消费门槛金额。 
     * 达到消费门槛金额以后用户可以享受优惠，消费门槛金额不能小于0.1元，不能超过9999元。 
     */
    private $_FloorAmount;
    
    /**
     * 消费门槛金额。 
     * 达到消费门槛金额以后用户可以享受优惠，消费门槛金额不能小于0.1元，不能超过9999元。 
     */
    public function getFloorAmount() {
        return $this->_FloorAmount;
    }
    
    /**
     * 消费门槛金额。 
     * 达到消费门槛金额以后用户可以享受优惠，消费门槛金额不能小于0.1元，不能超过9999元。 
     */
    public function setFloorAmount($_FloorAmount) {
        $this->_FloorAmount = $_FloorAmount;
        $this->bizContentarr['floor_amount'] = $_FloorAmount;
    }

    /**
     * 规则配置，JSON字符串
     * {"PID": "2088512417841101,2088512417841102", "STORE": "123456,678901"}
     * 其中PID表示可以核销该券的pid列表，多个值用英文逗号隔开。
     * PID为必传且必须签约当面付，STORE表示可以核销该券的内部门店ID，多个值用英文逗号隔开 。
     * 仅支持PID和STOREID核销规则，PID列表和门店ID列表均不能含有重复ID，并且门店ID数量最多支持3000个。 
     */
    private $_RuleConf;
    
    /**
     * 规则配置，JSON字符串
     * {"PID": "2088512417841101,2088512417841102", "STORE": "123456,678901"}
     * 其中PID表示可以核销该券的pid列表，多个值用英文逗号隔开。
     * PID为必传且必须签约当面付，STORE表示可以核销该券的内部门店ID，多个值用英文逗号隔开 。
     * 仅支持PID和STOREID核销规则，PID列表和门店ID列表均不能含有重复ID，并且门店ID数量最多支持3000个。 
     */
    public function getRuleConf() {
        return $this->_RuleConf;
    }
    
    /**
     * 规则配置，JSON字符串
     * {"PID": "2088512417841101,2088512417841102", "STORE": "123456,678901"}
     * 其中PID表示可以核销该券的pid列表，多个值用英文逗号隔开。
     * PID为必传且必须签约当面付，STORE表示可以核销该券的内部门店ID，多个值用英文逗号隔开 。
     * 仅支持PID和STOREID核销规则，PID列表和门店ID列表均不能含有重复ID，并且门店ID数量最多支持3000个。 
     */
    public function setRuleConf($_RuleConf) {
        $this->_RuleConf = $_RuleConf;
        $this->bizContentarr['_rule_conf'] = $_RuleConf;
    }
    
    /**
     * 券变动异步通知地址
     */
    private $_NotifyUrl;
    
    /**
     * 券变动异步通知地址
     */
    public function getNotifyUrl() {
        return $this->_NotifyUrl;
    }
    
    /**
     * 券变动异步通知地址
     */
    public function setNotifyUrl($_NotifyUrl) {
        $this->_NotifyUrl = $_NotifyUrl;
        $this->bizContentarr['notify_url'] = $_NotifyUrl;
    }
}