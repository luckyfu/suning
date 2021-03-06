<?php
/**
 * 
 *
 * @author suning
 * @date   2021-1-11
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ActivitycouponCreateRequest();
//赋值……
$req->setActivityName("店铺抽奖券");
$activityProductList = new ActivityProductList();
$activityProductList->setProductCode("11111111");
$activityProductList->setProductType("00");
$req->setActivityProductList(array($activityProductList));
$req->setActivityTimesLimit("99999");
$req->setAssignedRole("11");
$req->setBaseAmount("999");
$req->setCouponType("2");
$req->setEffectEndTime("2018-09-30");
$req->setEffectStartTime("2018-09-01");
$req->setEndTime("2018-09-30 23:59:59");
$req->setIsShop("1");
$req->setRewardAmount("50");
$req->setShopCode("70055152");
$req->setStartTime("2018-09-01 00:00:00");

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