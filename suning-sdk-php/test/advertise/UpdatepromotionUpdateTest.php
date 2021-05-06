<?php
/**
 * 
 *
 * @author suning
 * @date   2020-9-18
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new UpdatepromotionUpdateRequest();
//赋值……
$throwControl = new ThrowControl();
$throwControl->setPositionType("app");
$throwControl->setThrowDiscount("120");
$customData = new CustomData();
$customData->setDate("2020-04-29");
$customData->setUserLimitAmount("200");
$cpcDayAmount = new CpcDayAmount();
$cpcDayAmount->setCustomData(array($customData));
$cpcDayAmount->setDefaultUserLimitAmount("200");
$promotionDto = new PromotionDto();
$promotionDto->setCpcDayAmount($cpcDayAmount);
$promotionDto->setCustnum("6001849930");
$promotionDto->setEndDate("2020-04-29");
$promotionDto->setName("大聚会");
$promotionDto->setPromotionId("40000008");
$promotionDto->setStartDate("2020-04-29");
$promotionDto->setThrowArea("70 80 180 230 270");
$promotionDto->setThrowControl(array($throwControl));
$promotionDto->setThrowRebate("100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100");
$promotionDto->setThrowTime("0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23");
$req->setPromotionDto($promotionDto);

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