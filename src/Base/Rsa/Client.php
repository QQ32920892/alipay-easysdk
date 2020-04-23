<?php

namespace Supen\Alipay\Base\Rsa;

use Supen\Alipay\AlipayAopClient;

class Client extends AlipayAopClient
{
    public function rsaCheck()
    {
        header("Content-type: text/html; charset=gbk");

        foreach ($_REQUEST as $key => $value) {
            $_REQUEST[$key] = stripslashes($value);
        }

        // 验证网关请求
        if (isset($_REQUEST["service"]) && $_REQUEST["service"] == "alipay.service.check") {

            $sign_verify = $this->alipayAop->rsaCheckV2($_REQUEST, $this->alipayAop->alipayrsaPublicKey, $this->config['signType']);

            if (!$sign_verify) {
                // 如果验证网关时，请求参数签名失败，则按照标准格式返回，方便在服务窗后台查看。
                if (isset($_REQUEST["service"]) && $_REQUEST["service"] == "alipay.service.check") {
                    return ['success' => false, 'message' => $this->verifygw(false)];
                } else {
                    return ['success' => false, 'message' => 'sign verfiy fail.'];
                }
            }

            return ['success' => true, 'message' => $this->verifygw(true)];
        }

        $sign_verify = $this->alipayAop->rsaCheckV1($_REQUEST, $this->alipayAop->alipayrsaPublicKey, $this->config['signType']);

        return ['success' => true];
    }

    public function verifygw($is_sign_success)
    {
        $biz_content = $_REQUEST['biz_content'];

        $disableLibxmlEntityLoader = libxml_disable_entity_loader(true);
        $xml = simplexml_load_string($biz_content);
        libxml_disable_entity_loader($disableLibxmlEntityLoader);

        $EventType = (string) $xml->EventType;

        if ($EventType == "verifygw") {
            if ($is_sign_success) {
                $response_xml = "<success>true</success><biz_content>" . $this->config['app_public_key'] . "</biz_content>";
            } else {
                $response_xml = "<success>false</success><error_code>VERIFY_FAILED</error_code><biz_content>" . $this->config['app_public_key']  . "</biz_content>";
            }

            $mysign = $this->alipayAop->alonersaSign($response_xml, $this->config['app_private_key'], $this->config['signType']);
            $return_xml = "<?xml version=\"1.0\" encoding=\"" . $this->config['postCharset'] . "\"?><alipay><response>" . $response_xml . "</response><sign>" . $mysign . "</sign><sign_type>" . $this->config['signType'] . "</sign_type></alipay>";

            return $return_xml;
        }
    }
}
