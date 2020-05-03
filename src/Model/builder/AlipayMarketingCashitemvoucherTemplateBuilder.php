<?php

require_once 'ContentBuilder.php';

/**
 * alipay.marketing.cashitemvoucher.template.create(有资金单品券创建)
 * https://opendocs.alipay.com/apis/api_5/alipay.marketing.cashitemvoucher.template.create
 */
class AlipayMarketingCashitemvoucherTemplateBuilder extends ContentBuilder
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
     * 单品券封面图片。 请先通过图片上传接口：alipay.marketing.material.image.upload上传图片。
     * 通过图片上传接口获取获得图片资源id以后，将该图片资源id传入，
     * 单张大小不超过2MB，格式支持png、gif、jpg、jpeg、bmp，尺寸为800X600 
     */
    private $_GoodsCoverImageId;
    
    /**
     * 单品券封面图片。 请先通过图片上传接口：alipay.marketing.material.image.upload上传图片。
     * 通过图片上传接口获取获得图片资源id以后，将该图片资源id传入，
     * 单张大小不超过2MB，格式支持png、gif、jpg、jpeg、bmp，尺寸为800X600 
     */
    public function getGoodsCoverImageId() {
        return $this->_GoodsCoverImageId;
    }
    
    /**
     * 单品券封面图片。 请先通过图片上传接口：alipay.marketing.material.image.upload上传图片。
     * 通过图片上传接口获取获得图片资源id以后，将该图片资源id传入，
     * 单张大小不超过2MB，格式支持png、gif、jpg、jpeg、bmp，尺寸为800X600 
     */
    public function setGoodsCoverImageId($_GoodsCoverImageId) {
        $this->_GoodsCoverImageId = $_GoodsCoverImageId;
        $this->bizContentarr['goods_cover_image_id'] = $_GoodsCoverImageId;
    }

    /**
     * 商品名称。最多12个字 
     */
    private $_GoodsName;
    
    /**
     * 商品名称。最多12个字 
     */
    public function getGoodsName() {
        return $this->_GoodsName;
    }
    
    /**
     * 商品名称。最多12个字 
     */
    public function setGoodsName($_GoodsName) {
        $this->_GoodsName = $_GoodsName;
        $this->bizContentarr['goods_name'] = $_GoodsName;
    }

    /**
     * 商品描述信息。 用于券面展示，向用户介绍商品，最多120字。 
     */
    private $_GoodsInfo;
    
    /**
     * 商品描述信息。 用于券面展示，向用户介绍商品，最多120字。 
     */
    public function getGoodsInfo() {
        return $this->_GoodsInfo;
    }
    
    /**
     * 商品描述信息。 用于券面展示，向用户介绍商品，最多120字。 
     */
    public function setGoodsInfo($_GoodsInfo) {
        $this->_GoodsInfo = $_GoodsInfo;
        $this->bizContentarr['goods_info'] = $_GoodsInfo;
    }

    /**
     * 可优惠商品编码。
     * 多个编码标点隔开，不能含有重复id，最多3千个单品数量。
     * 当用户支付时，交易中的商品编码和单品券配置的商品编码有任一匹配时，可以使用单品优惠券。
     */
    private $_GoodsId;
    
    /**
     * 可优惠商品编码。
     * 多个编码标点隔开，不能含有重复id，最多3千个单品数量。
     * 当用户支付时，交易中的商品编码和单品券配置的商品编码有任一匹配时，可以使用单品优惠券。
     */
    public function getGoodsId() {
        return $this->_GoodsId;
    }
    
    /**
     * 可优惠商品编码。
     * 多个编码标点隔开，不能含有重复id，最多3千个单品数量。
     * 当用户支付时，交易中的商品编码和单品券配置的商品编码有任一匹配时，可以使用单品优惠券。
     */
    public function setGoodsId($_GoodsId) {
        $this->_GoodsId = $_GoodsId;
        $this->bizContentarr['goods_id'] = $_GoodsId;
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
    }
    
    /**
     * 所有商品最多可享折扣数量。 
     * 当用户购买多件时，最多可以对几件特价支付。
     * 假设券类型为有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER），商品编码填写A、B，此参数传入2，则订单中不管是A或者B，一共只能优惠2件，第3件以上原价。必须是整数，最低数量为1，最高99。
     * 券类型为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）和有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时必填，有资金单品代金券（ITEM_BALANCE_FIX_VOUCHER）下此值必须为0。
     */
    private $_GoodsCeilingQuantity;
    
    /**
     * 所有商品最多可享折扣数量。 
     * 当用户购买多件时，最多可以对几件特价支付。
     * 假设券类型为有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER），商品编码填写A、B，此参数传入2，则订单中不管是A或者B，一共只能优惠2件，第3件以上原价。必须是整数，最低数量为1，最高99。
     * 券类型为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）和有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时必填，有资金单品代金券（ITEM_BALANCE_FIX_VOUCHER）下此值必须为0。
     */
    public function getGoodsCeilingQuantity() {
        return $this->_GoodsCeilingQuantity;
    }
    
    /**
     * 所有商品最多可享折扣数量。 
     * 当用户购买多件时，最多可以对几件特价支付。
     * 假设券类型为有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER），商品编码填写A、B，此参数传入2，则订单中不管是A或者B，一共只能优惠2件，第3件以上原价。必须是整数，最低数量为1，最高99。
     * 券类型为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）和有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时必填，有资金单品代金券（ITEM_BALANCE_FIX_VOUCHER）下此值必须为0。
     */
    public function setGoodsCeilingQuantity($_GoodsCeilingQuantity) {
        $this->_GoodsCeilingQuantity = $_GoodsCeilingQuantity;
        $this->bizContentarr['goods_ceiling_quantity'] = $_GoodsCeilingQuantity;
    }
    
    /**
     * 商品原价。
     * 当voucher_type为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）和有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时必选，有资金单品代金券类型（ITEM_BALANCE_FIX_VOUCHER）下此值必须为空。
     * 用于计算最大优惠价格（最大优惠价格的计算方式请参考产品说明文档）。 
     */
    private $_GoodsOriginPrice;
    
    /**
     * 商品原价。
     * 当voucher_type为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）和有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时必选，有资金单品代金券类型（ITEM_BALANCE_FIX_VOUCHER）下此值必须为空。
     * 用于计算最大优惠价格（最大优惠价格的计算方式请参考产品说明文档）。 
     */
    public function getGoodsOriginPrice() {
        return $this->_GoodsOriginPrice;
    }
    
    /**
     * 商品原价。
     * 当voucher_type为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）和有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时必选，有资金单品代金券类型（ITEM_BALANCE_FIX_VOUCHER）下此值必须为空。
     * 用于计算最大优惠价格（最大优惠价格的计算方式请参考产品说明文档）。 
     */
    public function setGoodsOriginPrice($_GoodsOriginPrice) {
        $this->_GoodsOriginPrice = $_GoodsOriginPrice;
        $this->bizContentarr['goods_origin_price'] = $_GoodsOriginPrice;
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
     * 单品价格可以享受的折扣力度（如填写0.9就表示9折）。
     * 该值必须大于等于0.1且小于1，小数点以后最多保留两位。
     * voucher_type为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）时必选，其他券类型场景此值必须为0。 
     */
    private $_Discount;
    
    /**
     * 单品价格可以享受的折扣力度（如填写0.9就表示9折）。
     * 该值必须大于等于0.1且小于1，小数点以后最多保留两位。
     * voucher_type为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）时必选，其他券类型场景此值必须为0。 
     */
    public function getDiscount() {
        return $this->_Discount;
    }
    
    /**
     * 单品价格可以享受的折扣力度（如填写0.9就表示9折）。
     * 该值必须大于等于0.1且小于1，小数点以后最多保留两位。
     * voucher_type为有资金单品折扣券（ITEM_BALANCE_DISCOUNT_VOUCHER）时必选，其他券类型场景此值必须为0。 
     */
    public function setDiscount($_Discount) {
        $this->_Discount = $_Discount;
        $this->bizContentarr['discount'] = $_Discount;
    }
    
    /**
     * 特价面额。
     * 使用特定价格购买单品，币种为人民币，最高特价面额不能超过999元，不可为负值。
     * voucher_type为有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时必选，其他券类型场景此值必须为空。
     */
    private $_SpecialPrice;
    
    /**
     * 特价面额。
     * 使用特定价格购买单品，币种为人民币，最高特价面额不能超过999元，不可为负值。
     * voucher_type为有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时必选，其他券类型场景此值必须为空。
     */
    public function getSpecialPrice() {
        return $this->_SpecialPrice;
    }
    
    /**
     * 特价面额。
     * 使用特定价格购买单品，币种为人民币，最高特价面额不能超过999元，不可为负值。
     * voucher_type为有资金单品特价券（ITEM_BALANCE_SPE_VOUCHER）时必选，其他券类型场景此值必须为空。
     */
    public function setSpecialPrice($_SpecialPrice) {
        $this->_SpecialPrice = $_SpecialPrice;
        $this->bizContentarr['specia_price'] = $_SpecialPrice;
    }
    
    /**
     * 单品券详情图片。
     * 请先通过图片上传接口：alipay.marketing.material.image.upload上传图片。
     * 通过图片上传接口获取获得图片资源id以后，将该图片资源id传入，单张大小不超过2MB，格式支持png、gif、jpg、jpeg、bmp，尺寸为800X600。
     * 最多支持3张单品详情图片，图片资源id用英文逗号分隔，不可含有重复资源ID。
     */
    private $_GoodsDetailImageIds;
    
    /**
     * 单品券详情图片。
     * 请先通过图片上传接口：alipay.marketing.material.image.upload上传图片。
     * 通过图片上传接口获取获得图片资源id以后，将该图片资源id传入，单张大小不超过2MB，格式支持png、gif、jpg、jpeg、bmp，尺寸为800X600。
     * 最多支持3张单品详情图片，图片资源id用英文逗号分隔，不可含有重复资源ID。
     */
    public function getGoodsDetailImageIds() {
        return $this->_GoodsDetailImageIds;
    }
    
    /**
     * 单品券详情图片。
     * 请先通过图片上传接口：alipay.marketing.material.image.upload上传图片。
     * 通过图片上传接口获取获得图片资源id以后，将该图片资源id传入，单张大小不超过2MB，格式支持png、gif、jpg、jpeg、bmp，尺寸为800X600。
     * 最多支持3张单品详情图片，图片资源id用英文逗号分隔，不可含有重复资源ID。
     */
    public function setGoodsDetailImageIds($_GoodsDetailImageIds) {
        $this->_GoodsDetailImageIds = $_GoodsDetailImageIds;
        $this->bizContentarr['Goods_detail_image_ids'] = $_GoodsDetailImageIds;
    }
    
    /**
     * 券可用时段，JSON数组字符串，空数组即[]，表示不限制。
     * 指定每周时间段示例：
     * [{"day_rule": "1,2,3,4,5", "time_begin": "09:00:00", "time_end": "22:00:00"}, {"day_rule": "6,7", "time_begin": "08:00:00", "time_end": "23:00:00"}]
     * 数组中每个元素都包含三个key：day_rule, time_begin, time_end，其中day_rule表示周几，取值范围[1, 2, 3, 4, 5, 6, 7]（周7表示星期日），多个值使用英文逗号隔开；time_begin和time_end分别表示生效起始时间和结束时间，格式为HH:mm:ss。
     * 另外，数组中各个时间规则是或关系。
     * 例如，[{"day_rule": "1,2,3,4,5", "time_begin": "09:00:00", "time_end": "22:00:00"}, {"day_rule": "6,7", "time_begin": "08:00:00", "time_end": "23:00:00"}]表示在每周的一，二，三，四，五的早上9点到晚上10点券可用或者每周的星期六和星期日的早上8点到晚上11点券可用。 
     */
    private $_VoucherAvailableTime;
    
    /**
     * 券可用时段，JSON数组字符串，空数组即[]，表示不限制。
     * 指定每周时间段示例：
     * [{"day_rule": "1,2,3,4,5", "time_begin": "09:00:00", "time_end": "22:00:00"}, {"day_rule": "6,7", "time_begin": "08:00:00", "time_end": "23:00:00"}]
     * 数组中每个元素都包含三个key：day_rule, time_begin, time_end，其中day_rule表示周几，取值范围[1, 2, 3, 4, 5, 6, 7]（周7表示星期日），多个值使用英文逗号隔开；time_begin和time_end分别表示生效起始时间和结束时间，格式为HH:mm:ss。
     * 另外，数组中各个时间规则是或关系。
     * 例如，[{"day_rule": "1,2,3,4,5", "time_begin": "09:00:00", "time_end": "22:00:00"}, {"day_rule": "6,7", "time_begin": "08:00:00", "time_end": "23:00:00"}]表示在每周的一，二，三，四，五的早上9点到晚上10点券可用或者每周的星期六和星期日的早上8点到晚上11点券可用。 
     */
    public function getVoucherAvailableTime() {
        return $this->_VoucherAvailableTime;
    }
    
    /**
     * 券可用时段，JSON数组字符串，空数组即[]，表示不限制。
     * 指定每周时间段示例：
     * [{"day_rule": "1,2,3,4,5", "time_begin": "09:00:00", "time_end": "22:00:00"}, {"day_rule": "6,7", "time_begin": "08:00:00", "time_end": "23:00:00"}]
     * 数组中每个元素都包含三个key：day_rule, time_begin, time_end，其中day_rule表示周几，取值范围[1, 2, 3, 4, 5, 6, 7]（周7表示星期日），多个值使用英文逗号隔开；time_begin和time_end分别表示生效起始时间和结束时间，格式为HH:mm:ss。
     * 另外，数组中各个时间规则是或关系。
     * 例如，[{"day_rule": "1,2,3,4,5", "time_begin": "09:00:00", "time_end": "22:00:00"}, {"day_rule": "6,7", "time_begin": "08:00:00", "time_end": "23:00:00"}]表示在每周的一，二，三，四，五的早上9点到晚上10点券可用或者每周的星期六和星期日的早上8点到晚上11点券可用。 
     */
    public function setVoucherAvailableTime($_VoucherAvailableTime) {
        $this->_VoucherAvailableTime = $_VoucherAvailableTime;
        $this->bizContentarr['voucher_available_time'] = $_VoucherAvailableTime;
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
}
