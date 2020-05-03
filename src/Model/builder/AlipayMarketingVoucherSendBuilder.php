<?php

require_once 'ContentBuilder.php';

class AlipayMarketingVoucherSendBuilder extends ContentBuilder
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
     * 支付宝登录ID，手机或邮箱。
     * user_id, login_id, taobao_nick不能同时为空，优先级依次降低 
     */
    private $_LoginId;
    
    /**
     * 支付宝登录ID，手机或邮箱。
     * user_id, login_id, taobao_nick不能同时为空，优先级依次降低 
     */
    public function getLoginId() {
        return $this->_LoginId;
    }
    
    /**
     * 支付宝登录ID，手机或邮箱。
     * user_id, login_id, taobao_nick不能同时为空，优先级依次降低 
     */
    public function setLoginId($_LoginId) {
        $this->_LoginId = $_LoginId;
        $this->bizContentarr['login_id'] = $_LoginId;
    }
    
    /**
     * 淘宝昵称。
     * user_id, login_id, taobao_nick不能同时为空，优先级依次降低 
     */
    private $_TaobaoNick;
    
    /**
     * 淘宝昵称。
     * user_id, login_id, taobao_nick不能同时为空，优先级依次降低 
     */
    public function getTaobaoNick() {
        return $this->_TaobaoNick;
    }
    
    /**
     * 淘宝昵称。
     * user_id, login_id, taobao_nick不能同时为空，优先级依次降低 
     */
    public function setTaobaoNick($_TaobaoNick) {
        $this->_TaobaoNick = $_TaobaoNick;
        $this->bizContentarr['taobao_nick'] = $_TaobaoNick;
    }
    
    /**
     * 支付宝用户ID。
     * user_id, login_id, taobao_nick不能同时为空，优先级依次降低 
     */
    private $_UserId;
    
    /**
     * 支付宝用户ID。
     * user_id, login_id, taobao_nick不能同时为空，优先级依次降低 
     */
    public function getUserId() {
        return $this->_UserId;
    }
    
    /**
     * 支付宝用户ID。
     * user_id, login_id, taobao_nick不能同时为空，优先级依次降低 
     */
    public function setUserId($_UserId) {
        $this->_UserId = $_UserId;
        $this->bizContentarr['user_id'] = $_UserId;
    }
    
    /**
     * 外部业务订单号，用于幂等控制，相同template_id和out_biz_no认为是同一次业务 
     */
    private $_OutBizNo;
    
    /**
     * 外部业务订单号，用于幂等控制，相同template_id和out_biz_no认为是同一次业务 
     */
    public function getOutBizNo() {
        return $this->_OutBizNo;
    }
    
    /**
     * 外部业务订单号，用于幂等控制，相同template_id和out_biz_no认为是同一次业务 
     */
    public function setOutBizNo($_OutBizNo) {
        $this->_OutBizNo = $_OutBizNo;
        $this->bizContentarr['out_biz_no'] = $_OutBizNo;
    }
    
    /**
     * 券金额。
     * 浮点数，格式为#.00，单位是元。红包发放时填写，其它情形不能填
     */
    private $_Amount;
    
    /**
     * 券金额。
     * 浮点数，格式为#.00，单位是元。红包发放时填写，其它情形不能填
     */
    public function getAmount() {
        return $this->_Amount;
    }
    
    /**
     * 券金额。
     * 浮点数，格式为#.00，单位是元。红包发放时填写，其它情形不能填
     */
    public function setAmount($_Amount) {
        $this->_Amount = $_Amount;
        $this->bizContentarr['amount'] = $_Amount;
    }
    
    /**
     * 发券备注
     */
    private $_Memo;
    
    /**
     * 发券备注
     */
    public function getMemo() {
        return $this->_Memo;
    }
    
    /**
     * 发券备注
     */
    public function setMemo($_Memo) {
        $this->_Memo = $_Memo;
        $this->bizContentarr['memo'] = $_Memo;
    }
    
    /**
     * 扩展参数，当前仅允许传入的key值为"alipayMiniAppToken" 
     */
    private $_ExtendInfo;
    
    /**
     * 扩展参数，当前仅允许传入的key值为"alipayMiniAppToken" 
     */
    public function getExtendInfo() {
        return $this->_ExtendInfo;
    }
    
    /**
     * 扩展参数，当前仅允许传入的key值为"alipayMiniAppToken" 
     */
    public function setExtendInfo($_ExtendInfo) {
        $this->_ExtendInfo = $_ExtendInfo;
    }
    
    
}