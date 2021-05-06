<?php
/**
 * 
 *
 * @author suning
 * @date   2020-9-19
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new UpdateunitUpdateRequest();
//赋值……
$flowPackList = new FlowPackList();
$flowPackList->setFlowTypeExplain("我的大促：把握大促会场流量，借力巨人肩膀");
$flowPackList->setFlowTypeId("1021");
$flowPackList->setFlowTypeName("购物前");
$flowPackList->setPremium("100");
$extField = new ExtField();
$extField->setZncbPricePC("200");
$extField->setZncbPriceWAP("200");
$promotionUnitDto = new PromotionUnitDto();
$promotionUnitDto->setCommendCrowd("Map类型");
$promotionUnitDto->setCustnum("6001849930");
$promotionUnitDto->setExtField($extField);
$promotionUnitDto->setFlowPackList(array($flowPackList));
$promotionUnitDto->setImgIndex("0");
$promotionUnitDto->setMatchMode("Map类型");
$promotionUnitDto->setName("大聚会");
$promotionUnitDto->setOcpc("Map<String,Object> ocpc");
$promotionUnitDto->setPromotionId("40000008");
$promotionUnitDto->setPromotionUnitId("40000081");
$promotionUnitDto->setRankingsButton("Map类型");
$promotionUnitDto->setRankingsDiscount("Map");
$promotionUnitDto->setRankingsOrder("Map");
$promotionUnitDto->setRecommendPrice("200");
$promotionUnitDto->setSearchCrowd("Map");
$req->setPromotionUnitDto($promotionUnitDto);

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