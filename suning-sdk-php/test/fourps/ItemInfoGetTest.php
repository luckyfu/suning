<?php
/**
 * 商品信息单笔查询接口
 *
 * @author suning
 * @date   2016-8-15
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fourps/ItemInfoGetRequest.php');
$req = new ItemInfoGetRequest();
//赋值……
$req->setSupplierCmCode("20160815002");
$req->setProductName("IPHONE6Så¨ç½é112");
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "30d2f5605061d760e1c6a1ba1d4a7e59";
$appSecret = "b9ae1a76f5d75c9667471b184dc39b7e";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>