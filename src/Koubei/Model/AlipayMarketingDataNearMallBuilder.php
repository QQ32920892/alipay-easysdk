<?php

require_once 'ContentBuilder.php';

/**
 * koubei.marketing.data.nearmall.query(周边商圈查询)
 * https://opendocs.alipay.com/apis/api_5/koubei.marketing.data.nearmall.query
 */
class AlipayMarketingDataNearMallBuilder extends ContentBuilder
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
     * 周边商圈查询
     */
    private $_Radius;
    
    /**
     * 周边商圈查询
     */
    public function getRadius() {
        return $this->_Radius;
    }
    
    /**
     * 周边商圈查询
     */
    public function setRadius($_Radius) {
        $this->_Radius = $_Radius;
        $this->bizContentarr['radius'] = $_Radius;
    }
    
    /**
     * 蚂蚁统一会员ID
     */
    private $_UserId;
    
    /**
     * 蚂蚁统一会员ID
     */
    public function getUserId() {
        return $this->_UserId;
    }
    
    /**
     * 蚂蚁统一会员ID
     */
    public function setUserId($_UserId) {
        $this->_UserId = $_UserId;
        $this->bizContentarr['user_id'] = $_UserId;
    }
    
    /**
     * 城市编码
     */
    private $_CityId;
    
    /**
     * 城市编码
     */
    public function getCityId() {
        return $this->_CityId;
    }
    
    /**
     * 城市编码
     */
    public function setCityId($_CityId) {
        $this->_CityId = $_CityId;
        $this->bizContentarr['city_id'] = $_CityId;
    }
    
    /**
     * 说明来源
     */
    private $_AppChannel;
    
    /**
     * 说明来源
     */
    public function getAppChannel() {
        return $this->_AppChannel;
    }
    
    /**
     * 说明来源
     */
    public function setAppChannel($_AppChannel) {
        $this->_AppChannel = $_AppChannel;
        $this->bizContentarr['app_channel'] = $_AppChannel;
    }

    /**
     * 经度
     */
    private $_Longitude;
    
    /**
     * 经度
     */
    public function getLongitude() {
        return $this->_Longitude;
    }
    
    /**
     * 经度
     */
    public function setLongitude($_Longitude) {
        $this->_Longitude = $_Longitude;
        $this->bizContentarr['longitude'] = $_Longitude;
    }
    
    /**
     * 纬度
     */
    private $_Latitude;
    
    /**
     * 纬度
     */
    public function getLatitude() {
        return $this->_Latitude;
    }
    
    /**
     * 纬度
     */
    public function setLatitude($_Latitude) {
        $this->_Latitude = $_Latitude;
        $this->bizContentarr['latitude'] = $_Latitude;
    }
    
    /**
     * 开始标记
     */
    private $_PageNo;
    
    /**
     * 开始标记
     */
    public function getPageNo() {
        return $this->_PageNo;
    }
    
    /**
     * 开始标记
     */
    public function setPageNo($_PageNo) {
        $this->_PageNo = $_PageNo;
        $this->bizContentarr['page_no'] = $_PageNo;
    }
    
    /**
     * 数量标记
     */
    private $_PageSize;
    
    /**
     * 数量标记
     */
    public function getPageSize() {
        return $this->_PageSize;
    }
    
    /**
     * 数量标记
     */
    public function setPageSize($_PageSize) {
        $this->_PageSize = $_PageSize;
        $this->bizContentarr['page_size'] = $_PageSize;
    }
    
    /**
     * 设备版本号
     */
    private $_ProductVersion;
    
    /**
     * 设备版本号
     */
    public function getProductVersion() {
        return $this->_ProductVersion;
    }
    
    /**
     * 设备版本号
     */
    public function setProductVersion($_ProductVersion) {
        $this->_ProductVersion = $_ProductVersion;
        $this->bizContentarr['product_version'] = $_ProductVersion;
    }
    
    /**
     * 设备ID
     */
    private $_ProductId;
    
    /**
     * 设备ID
     */
    public function getProductId() {
        return $this->_ProductId;
    }
    
    /**
     * 设备ID
     */
    public function setProductId($_ProductId) {
        $this->_ProductId = $_ProductId;
        $this->bizContentarr['product_id'] = $_ProductId;
    }
}
