<?php 

require_once 'ContentBuilder.php';

/**
 * alipay.marketing.cashvoucher.template.modify(修改券模板)
 * https://opendocs.alipay.com/apis/api_5/alipay.marketing.cashvoucher.template.modify
 */
class AlipayMarketingCashvoucherTemplateModifyBuilder extends ContentBuilder
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
     * 券模板ID 
     */
    private $_TemplateId;
    
    /**
     * 券模板ID 
     */
    public function getTemplateId() {
        return $this->_TemplateId;
    }
    
    /**
     * 券模板ID 
     */
    public function setTemplateId($_TemplateId) {
        $this->_TemplateId = $_TemplateId;
        $this->bizContentarr['template_id'] = $_TemplateId;
    }
    
    /**
     * 券标语，用于拼接券名称，最多6个字符，券名称=券标语+券面额+’元代金券’。
     * 仅草稿状态可修改 
     */
    private $_Slogan;
    
    /**
     * 券标语，用于拼接券名称，最多6个字符，券名称=券标语+券面额+’元代金券’。
     * 仅草稿状态可修改 
     */
    public function getSlogan() {
        return $this->_Slogan;
    }
    
    /**
     * 券标语，用于拼接券名称，最多6个字符，券名称=券标语+券面额+’元代金券’。
     * 仅草稿状态可修改 
     */
    public function setSlogan($_Slogan) {
        $this->_Slogan = $_Slogan;
        $this->bizContentarr['slogan'] = $_Slogan;
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
}
