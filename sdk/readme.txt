更新支付宝SDK注意事项
 
以下操作仅基于laravel框架项目需要调整，若其它开发框架在调用时没有出现函数名冲突则无需修改
下载最新sdk后需要作如下修改
 
 
步骤一
打开aop目录下 AopEncrypt.php文件
函数名 encrypt 改为 aop_encrypt
函数名 decrypt 改为 aop_decrypt

步骤二
打开aop目录下 AopClient.php 和 AopCertClient.php 文件

搜索
encrypt($apiParams['biz_content'], $this->encryptKey);
修改为
aop_encrypt($apiParams['biz_content'], $this->encryptKey);

搜索
decrypt($parsetItem->encryptContent, $this->encryptKey);
修改为
aop_decrypt($parsetItem->encryptContent, $this->encryptKey);
