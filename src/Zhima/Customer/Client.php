<?php
/*
 * @Author: Supen.Huang
 * @Date: 2020-02-19 03:23:53
 * @LastEditors: Supen.Huang
 * @LastEditTime: 2020-02-21 00:36:00
 */

namespace Supen\Alipay\Zhima\Customer;

use Supen\Alipay\AlipayAopClient;

class Client extends AlipayAopClient
{
    /**
     * 查询芝麻分
     *
     * @param string $transactionId
     * @param string $productCode
     * @param [type] $accessToken
     * @param string $appAuthToken
     * @return void
     */
    public function getCreditScore(string $transactionId, string $productCode, $accessToken, string $app_auth_token = null)
    {
        $bizContent = [
            'transaction_id'    => $transactionId,
            'product_code'      => $productCode,
        ];

        $request = new \ZhimaCreditScoreGetRequest();
        $request->setBizContent(json_encode($bizContent));
        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }

    /**
     * 芝麻分互查
     *
     * @param array $productParam       当前业务产品的产品码，接口提供方分配，填写的值即是示例值中的值 {"productCode":"w1010100001000002181"} 
     * @param string $bizType           当前业务操作是查询自己还是查询别人的芝麻分，接口提供方分配的值：self ：标识查询自己的分数或者做业务授权时也需要传入此值 other ： 标识需要查询别人的分数 
     * @param array  $identityParam     个人身份信息入参 若做业务授权请求请传入身份三要素，如下：{"certType":"IDENTITY_CARD","name":"kglvgu","certNo":"654326198005300549","userId":"2088302408281848"}  若为查询自己或者别人的信用状态，请传入userId，如下：{"userId":"2088xxxx281848"} 
     * @param string $callbackUrl       商户回调的url，业务操作完成后会在此url上追加返回参数
     * @param array  $extBizParam       用户传递扩展类的信息，例如传入当前用户的logo，昵称等，用于业务页面上的展示，此值为一个Map类型的json串字符，传入规则如下：{"key1":"val2","key2":"val2"} 
     * @param string $appAuthToken      应用授权Token
     * @return object
     */
    public function authMutualvie(array $productParam, string $bizType, array  $identityParam, string $callbackUrl, array  $extBizParam, string $app_auth_token = null)
    {
        $bizContent = [
            'product_param'     => json_encode($productParam),
            'biz_type'          => $bizType,
            'identity_param'    => json_encode($identityParam),
            'callback_url'      => $callbackUrl,
            'ext_biz_param'     => json_encode($extBizParam),
        ];

        $request = new \ZhimaCustomerAuthMutualviewApplyRequest();
        $request->setBizContent(json_encode($bizContent));

        return $this->formatResponse($request, $app_auth_token ?? $this->alipayAop->app_auth_token);
    }
}
