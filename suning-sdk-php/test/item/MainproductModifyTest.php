<?php
/**
 * 商品内容纠错申请
 *
 * @author suning
 * @date   2014-7-18
 */
// 引入主文件
require_once('../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../request/item/MainproductModifyRequest.php');
$req = new MainproductModifyRequest();
//赋值……
$req->setProductCode("1004562459");

$correctParams = new CorrectParams();
$correctParams->setCorrectKey("productName");
$correctParams->setCorrectValue("美的空调");
$correctParams->setCorrectReason("名字写错啦");
$correctParams->setCorrectPic("http://10.19.95.100/uimg/sop/richtext/201401240949566545.gif");

$req->setCorrectParams(array($correctParams));
//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://apipre.cnsuning.com/api/http/sopRequest";
$appKey = "8e6ada09d2d7419371a6d12d8f2ee15d";
$appSecret = "f5db9635f9f68ec566154d17bde21527";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'xml');
$resp = $client -> execute($req);
print_r("返回响应报文:".$resp);
?>