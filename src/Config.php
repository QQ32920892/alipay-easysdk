<?php

namespace Supen\Alipay;

class Config
{
    public $config = [
        'isCert'                    => false,
        //网关地址 不设置就默认线上网关
        'gatewayUrl'                => "https://openapi.alipay.com/gateway.do", //示例中使用的是沙箱环境网关，线上gateway_url：https://openapi.alipay.com/gateway.do
        //应用ID 为必填项
        'appId'                     => '',
        //商户私钥 为必填项
        'app_private_key'           => '',
        //支付宝公钥 获取地址https://openhome.alipay.com/platform/keyManage.htm
        'alipay_public_key'         => '',
        //内容AES加密密钥
        'aesKey'                    => '',
        //应用授权token，该参数只有当前appId应用类型属于第三方应用时才有效。
        'app_auth_token'            => '',
    
        /***********证书方式签名必填参数************/
        //应用公钥证书路径（要确保证书文件可读），例如：/home/admin/cert/appCertPublicKey.crt
        'app_cert_public_path'      =>'',
        //支付宝根证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayRootCert.crt
        'alipay_root_cert_path'     =>'',
        //支付宝公钥证书路径（要确保证书文件可读）获取地址https://openhome.alipay.com/platform/keyManage.htm，例如：/home/admin/cert/alipayCertPublicKey_RSA2.crt"
        'alipay_cert_public_path'   =>'',
        //是否校验自动下载的支付宝公钥证书，如果开启校验要保证支付宝根证书在有效期内
        'isCheckAlipayPublicCert'   =>true,
        
        /***********以下为保留参数************/
        'aesKey'                    => '',
        //异步通知地址
        'notify_url'                => "",
        //同步跳转
        'return_url'                => "",
    
        /***********以下参数建议默认************/
    
        //api版本
        'apiVersion'                => '1.0',
        //签名类型
        'signType'                  => 'RSA2',
        //表单提交字符集编码
        'postCharset'               => 'utf-8',
        //返回数据格式
        'format'                    => 'json',
    ];
}
