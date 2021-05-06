<?php
/**
 * 
 *
 * @author suning
 * @date   2021-4-16
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new BangrecyclesaleorderCreateRequest();
//赋值……
$req->setBrandName("华为");
$req->setBuName("热门设备");
$req->setFreight("299.99");
$req->setModelName("p30");
$req->setOrderTime("2021-04-01 11:12:13");
$req->setPayAmount("299.99");
$req->setPayTime("2021-04-01 11:12:13");
$req->setPayType("0");
$req->setRecycleOrderCode("111111111111111111");
$req->setSaleChannel("0");
$req->setSaleDire("0");
$req->setSaleOrderCode("111111111111111111");
$req->setSaleStatus("0");
$req->setServiceCharge("299.99");
$req->setStartingPrice("299.99");

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