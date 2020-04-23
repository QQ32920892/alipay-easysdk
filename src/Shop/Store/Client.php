<?php

namespace Supen\Alipay\Shop\Store;

use Supen\Alipay\AlipayAopClient;

class Client extends AlipayAopClient
{
    /**
     * 门店摘要信息批量查询接口
     * 函数参数参考地址：https://opendocs.alipay.com/apis/api_3/alipay.offline.market.shop.summary.batchquery
     *
     * @return void
     */
    public function summaryBatchquery(array $requestOption = ['op_role' => 'ISV','query_type'=>'MERCHANT_SELF'], $app_auth_token = null)
    {
        $requestService = new \AlipayOfflineMarketShopSummaryBatchqueryRequest ();
        $requestService->setBizContent(json_encode($requestOption));

        $result = $this->alipayAop->execute($requestService, null, $app_auth_token ?? $this->alipayAop->app_auth_token);

        $responseNode = str_replace(".", "_", $requestService->getApiMethodName()) . "_response";

        return $result->$responseNode;
    }
}
