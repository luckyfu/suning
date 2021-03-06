<?php
/**
 * 
 *
 * @author suning
 * @date   2021-4-21
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ExtensionlinkGetRequest();
//赋值……
$req->setPid("683ebf67f53b6a6b04bd");
$req->setProductUrl("https://product.suning.com/0070204412/11046979146.html?adtype=1");
$req->setPromotionId("fff");
$req->setQuanUrl("https://quan.suning.com/lqzx_recommend.do?activityId=201903190001000725&activitySecretKey=kwrK5exkwqreo3QzO3GL7TSX");
$req->setSubUser("Axxx");
$req->setSugsUrl("https://sugs.suning.com/GB6t0TXv");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a13b8bd0efb06a770c57d1c370ce8ee7";
$appSecret = "f08ce9836c4bcfc708194594081f6690";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
$reqJson = getReqJson($req);
print_r("请求报文:\n".$reqJson);
print_r("\n返回响应报文:\n".$resp);

function getReqJson($req){
	$paramsArray = $req -> getApiParams();
	if(empty($paramsArray)){
		$paramsArray = '';
	}
	$paramsArray = array('sn_request' => array('sn_body' => array(
		"{$req -> getBizName()}" => $paramsArray
	)));
	return json_encode($paramsArray);
}
?>