<?php
/**
 * 
 *
 * @author suning
 * @date   2021-4-23
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new DeliveryAddRequest();
//赋值……
$req->setDecoPageIp("//www.suning.com");
$deliveryList = new DeliveryList();
$deliveryList->setChannel("03");
$deliveryList->setDeliveryDesc("立即入会，享受专属会员福利");
$deliveryList->setDeliveryIconUrl("//www.suning.com");
$deliveryList->setDeliveryStatus("0");
$deliveryList->setDeliveryTitle("诚邀您加入店铺XX会员");
$deliveryList->setFloatIconUrl("//www.suning.com");
$deliveryList->setGuidePicUrl("//www.suning.com");
$deliveryList->setPosterEndTime("2020-03-31 00:00:00");
$deliveryList->setPosterStartTime("2020-03-01 12:03:30");
$deliveryList->setPosterUrl("//www.suning.com");
$req->setDeliveryList(array($deliveryList));
$req->setPageName("XX会员页");
$req->setPageType("会员  memIndex ； 抽奖 draw ；签到打卡  daka ；  其他 other");
$req->setServerId("1008722");
$req->setShowPageIp("//www.suning.com");

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