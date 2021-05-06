<?php
/**
 * 
 *
 * @author suning
 * @date   2020-9-22
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new GetkeywordrepbypagebydayQueryRequest();
//赋值……
$req->setCustnum("不传默认 0");
$req->setDayType("_3day");
$req->setEndDate("2020-09-21");
$req->setGoodsName("商品名称");
$req->setKeyword("关键词名称");
$req->setOrderBy("showNum");
$req->setPagerNumber("1");
$req->setPagerSize("11");
$req->setPromotionId("推广计划ID");
$req->setPromotionName("推广计划名称");
$req->setPromotionUnitId("推广计划单元ID");
$req->setStartDate("2020-09-21");

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