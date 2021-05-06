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
$req = new CreateunitCreateRequest();
//赋值……
$req->setCityId("null");
$req->setOperateAppliCode("null");
$req->setOperateSupplierType("null");
$req->setOperateUserType("0");
$req->setPromotionType("2");
$goods = new Goods();
$goods->setGoodsCode("11346320883");
$goods->setGoodsName("Apple iPhone 11 128G 黑色 移动联通电信4G全网通手机");
$flowPackList = new FlowPackList();
$flowPackList->setFlowTypeExplain("我的大促：把握大促会场流量，借力巨人肩膀");
$flowPackList->setFlowTypeId("01021");
$flowPackList->setFlowTypeName("购物前");
$flowPackList->setPremium("100");
$extField = new ExtField();
$extField->setZncbPricePC("100");
$extField->setZncbPriceWAP("100");
$promotionUnitDto = new PromotionUnitDto();
$promotionUnitDto->setCommendCrowd("2002");
$promotionUnitDto->setCustnum("6001849930");
$promotionUnitDto->setExtField(array($extField));
$promotionUnitDto->setFlowPackList(array($flowPackList));
$promotionUnitDto->setGoods(array($goods));
$promotionUnitDto->setMatchMode("1001");
$promotionUnitDto->setOcpc("1005");
$promotionUnitDto->setPromotionId("40000008");
$promotionUnitDto->setRankingsButton("1004");
$promotionUnitDto->setRankingsDiscount("1003");
$promotionUnitDto->setRankingsOrder("1002");
$promotionUnitDto->setRecommendPrice("200");
$promotionUnitDto->setSearchCrowd("2001");
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