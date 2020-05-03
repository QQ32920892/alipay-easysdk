<?php

require_once 'ContentBuilder.php';

/**
 * alipay.marketing.cashvoucher.template.create(创建资金券模板)一般指商家全场券
 * https://opendocs.alipay.com/apis/api_5/alipay.marketing.cashvoucher.template.create
 */
class AlipayMarketingCashvoucherTemplateBuilder extends ContentBuilder
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
     * 券使用场景。
     * 可枚举，目前支持
     * 支付宝充值中心话费流量通用现金券:ALIPAY_RECHARGE
     * 支付宝缴费业务代金券:ALIPAY_FEE
     * 支付宝通用现金代金券:ALIPAY_COMMON
     * 场景值会关联当前券的展示模板，默认描述等信息，若需特殊场景接入，请联系技术支持。 
     */
    private $_VoucherUseScene;
    
    /**
     * 券使用场景。
     * 可枚举，目前支持
     * 支付宝充值中心话费流量通用现金券:ALIPAY_RECHARGE
     * 支付宝缴费业务代金券:ALIPAY_FEE
     * 支付宝通用现金代金券:ALIPAY_COMMON
     * 场景值会关联当前券的展示模板，默认描述等信息，若需特殊场景接入，请联系技术支持。 
     */
    public function getVoucherUseScene() {
        return $this->_VoucherUseScene;
    }
    
    /**
     * 券使用场景。
     * 可枚举，目前支持
     * 支付宝充值中心话费流量通用现金券:ALIPAY_RECHARGE
     * 支付宝缴费业务代金券:ALIPAY_FEE
     * 支付宝通用现金代金券:ALIPAY_COMMON
     * 场景值会关联当前券的展示模板，默认描述等信息，若需特殊场景接入，请联系技术支持。 
     */
    public function setVoucherUseScene($_VoucherUseScene) {
        $this->_VoucherUseScene = $_VoucherUseScene;
        $this->bizContentarr['voucher_use_scene'] = $_VoucherUseScene;
    }
    
    /**
     * 出资人登录账号。
     * 用于发券的资金会从该账号划拨到发券专用账户上。
     * 当调用创建接口成功后，会返回付款订单页面，仅当前传入资金账号可进行付款，付款完成后券变更为激活状态，可进行发放。 
     */
    private $_FundAccount;
    
    /**
     * 出资人登录账号。
     * 用于发券的资金会从该账号划拨到发券专用账户上。
     * 当调用创建接口成功后，会返回付款订单页面，仅当前传入资金账号可进行付款，付款完成后券变更为激活状态，可进行发放。 
     */
    public function getFundAccount() {
        return $this->_FundAccount;
    }
    
    /**
     * 出资人登录账号。
     * 用于发券的资金会从该账号划拨到发券专用账户上。
     * 当调用创建接口成功后，会返回付款订单页面，仅当前传入资金账号可进行付款，付款完成后券变更为激活状态，可进行发放。 
     */
    public function setFundAccount($_FundAccount) {
        $this->_FundAccount = $_FundAccount;
        $this->bizContentarr['fund_account'] = $_FundAccount;
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
     * 重定向地址。
     * 支付成功后需要重定向的地址，如果为空则不做重定向。 
     */
    private $_RedirectUri;
    
    /**
     * 重定向地址。
     * 支付成功后需要重定向的地址，如果为空则不做重定向。 
     */
    public function getRedirectUri() {
        return $this->_RedirectUri;
    }
    
    /**
     * 重定向地址。
     * 支付成功后需要重定向的地址，如果为空则不做重定向。 
     */
    public function setRedirectUri($_RedirectUri) {
        $this->_RedirectUri = $_RedirectUri;
        $this->bizContentarr['redirect_uri'] = $_RedirectUri;
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
     * 扩展字段,JSON字符串。
     * 目前支持使用模式扩展：
     * {"useMode":"H5","useModeData":{"url":"http://www.yourdomian.com/yourusepage.htm","signKeys":"voucherId,userId,tag","charset":"UTF-8","signType":"RSA2","tag":"this is my tag"}}
     * 其中如果useMode表示自定义的使用模式类型，
     * 目前仅支持"H5",表示在券详情页按钮跳转至自定义H5页面，
     * 当传入useMode参数后，将会检查useModeData对象数据，
     * 其中的url为必传参数; url字段表示客制化使用按钮跳转链接，
     * 传入该字段后在券详情使用时点击效果将会跳转此链接，链接将进行白名单过滤，如果无法接入成功请联系技术支持;
     * signKeys字段表示跳转至客制链接时的加签字段，如果不传默认为voucherId,userId,tag;signType为加签类型，
     * 目前支持RSA及RSA2,如果不传则不会加签;
     * charset为链接编码格式，不传默认为UTF-8;
     * tag为自定义参数，会直接透传回使用链接;
     * 当传入合法加签信息后，券使用链接将为
     * http://www.yourdomain.com/yourusepage.htm?voucherId=当前券id&userId=当前用户id&tag=传入tag&sign=对应算法及key生成的加签数据 
     */
    private $_ExtensionInfo;
    
    /**
     * 扩展字段,JSON字符串。
     * 目前支持使用模式扩展：
     * {"useMode":"H5","useModeData":{"url":"http://www.yourdomian.com/yourusepage.htm","signKeys":"voucherId,userId,tag","charset":"UTF-8","signType":"RSA2","tag":"this is my tag"}}
     * 其中如果useMode表示自定义的使用模式类型，
     * 目前仅支持"H5",表示在券详情页按钮跳转至自定义H5页面，
     * 当传入useMode参数后，将会检查useModeData对象数据，
     * 其中的url为必传参数; url字段表示客制化使用按钮跳转链接，
     * 传入该字段后在券详情使用时点击效果将会跳转此链接，链接将进行白名单过滤，如果无法接入成功请联系技术支持;
     * signKeys字段表示跳转至客制链接时的加签字段，如果不传默认为voucherId,userId,tag;signType为加签类型，
     * 目前支持RSA及RSA2,如果不传则不会加签;
     * charset为链接编码格式，不传默认为UTF-8;
     * tag为自定义参数，会直接透传回使用链接;
     * 当传入合法加签信息后，券使用链接将为
     * http://www.yourdomain.com/yourusepage.htm?voucherId=当前券id&userId=当前用户id&tag=传入tag&sign=对应算法及key生成的加签数据 
     */
    public function getExtensionInfo() {
        return $this->_ExtensionInfo;
    }
    
    /**
     * 扩展字段,JSON字符串。
     * 目前支持使用模式扩展：
     * {"useMode":"H5","useModeData":{"url":"http://www.yourdomian.com/yourusepage.htm","signKeys":"voucherId,userId,tag","charset":"UTF-8","signType":"RSA2","tag":"this is my tag"}}
     * 其中如果useMode表示自定义的使用模式类型，
     * 目前仅支持"H5",表示在券详情页按钮跳转至自定义H5页面，
     * 当传入useMode参数后，将会检查useModeData对象数据，
     * 其中的url为必传参数; url字段表示客制化使用按钮跳转链接，
     * 传入该字段后在券详情使用时点击效果将会跳转此链接，链接将进行白名单过滤，如果无法接入成功请联系技术支持;
     * signKeys字段表示跳转至客制链接时的加签字段，如果不传默认为voucherId,userId,tag;signType为加签类型，
     * 目前支持RSA及RSA2,如果不传则不会加签;
     * charset为链接编码格式，不传默认为UTF-8;
     * tag为自定义参数，会直接透传回使用链接;
     * 当传入合法加签信息后，券使用链接将为
     * http://www.yourdomain.com/yourusepage.htm?voucherId=当前券id&userId=当前用户id&tag=传入tag&sign=对应算法及key生成的加签数据 
     */
    public function setExtensionInfo($_ExtensionInfo) {
        $this->_ExtensionInfo = $_ExtensionInfo;
        $this->bizContentarr['extension_info'] = $_ExtensionInfo;
    }
}