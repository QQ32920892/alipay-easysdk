<?php

namespace Supen\Alipay\Shop\Product;

use Supen\Alipay\AlipayAopClient;

class Client extends AlipayAopClient
{
    /**
     * 商品文件上传
     * api：https://opendocs.alipay.com/apis/api_4/alipay.merchant.item.file.upload
     *
     * @param string $file
     * @param string $app_auth_token
     * @return array
     */
    public function fileUpload(string $file, string $app_auth_token = null)
    {
        $requestService = new \AlipayMerchantItemFileUploadRequest();
        $requestService->setScene("SYNC_ORDER");
        $requestService->setFileContent("@" . $file);
        return $this->formatResponse($requestService, $app_auth_token);
    }

    /**
     * 创建商品
     * api：https://opendocs.alipay.com/apis/api_4/ant.merchant.expand.item.open.create
     *
     * @param array $data
     * @param string $app_auth_token
     * @return array
     */
    public function createProduct(array $data, string $app_auth_token = null)
    {
        $requestService = new \AntMerchantExpandItemOpenCreateRequest();
        $requestService->setBizContent(json_encode($data));
        return $this->formatResponse($requestService, $app_auth_token);
    }

    /**
     * 修改商品
     * api：https://opendocs.alipay.com/apis/api_4/ant.merchant.expand.item.open.modify
     *
     * @param array $data
     * @param string $app_auth_token
     * @return array
     */
    public function modifyProduct(array $data, string $app_auth_token = null)
    {
        $requestService = new \AntMerchantExpandItemOpenModifyRequest();
        $requestService->setBizContent(json_encode($data));
        return $this->formatResponse($requestService, $app_auth_token);
    }

    /**
     * 删除商品
     * api：https://opendocs.alipay.com/apis/api_4/ant.merchant.expand.item.open.delete
     *
     * @param string $number
     * @param string $app_auth_token
     * @return void
     */
    public function deleteProduct(string $number, string $app_auth_token = null)
    {
        $requestService = new \AntMerchantExpandItemOpenDeleteRequest();
        $requestService->setBizContent(json_encode(['item_id'=>$number]));
        return $this->formatResponse($requestService, $app_auth_token);
    }

    /**
     * 查询小程序或商户所有商品
     * api：https://opendocs.alipay.com/apis/api_4/ant.merchant.expand.item.open.query
     *
     * @param string $target_id 商品归属主体ID：商品归属主体类型为店铺，则商品归属主体ID为店铺ID；归属主体为小程序，则归属主体ID为小程序ID
     * @param string $scene
     * @param string $target_type 商品归属主体类型: 5（店铺）8（小程序）
     * @param string $app_auth_token
     * @return array
     */
    public function queryAllProduct(string $target_id, $scene = 'APP_ORDER', $target_type = '8', string $app_auth_token = null)
    {
        $data                 = [];
        $data['target_id']    = $target_id;
        $data['scene']        = $scene;
        $data['target_type']  = strval($target_type);

        $requestService = new \AntMerchantExpandItemOpenQueryRequest();
        $requestService->setBizContent(json_encode($data));
        return $this->formatResponse($requestService, $app_auth_token);
    }

    /**
     * 查询商品
     * api：https://opendocs.alipay.com/apis/api_4/ant.merchant.expand.item.open.batchquery
     *
     * @param array $item_id_list   商品ID列表
     * @param string $app_auth_token
     * @return array
     */
    public function queryProduct(array $item_id_list, string $app_auth_token = null)
    {
        $requestService = new \AntMerchantExpandItemOpenBatchqueryRequest();
        $requestService->setBizContent(json_encode(['item_id_list' => $item_id_list]));
        return $this->formatResponse($requestService, $app_auth_token);
    }
}
