<?php
/**
 * 
 *
 * @author suning
 * @date   2020-11-27
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new InteractactivityCreateRequest();
//赋值……
$req->setActivityDes("测试活动描述");
$req->setActivityName("测试活动");
$req->setActivityType("1");
$req->setActivityUrl("https://galaxie100133.cloud.suning.com/suning-web-dingzhi/microsoft/coupon/activity?activityId=20201130000016017");
$req->setEndTime("2020-02-16 18:23:06");
$req->setStartTime("2020-02-15 18:23:06");
$req->setStoreCodes("78694881,78694882");

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