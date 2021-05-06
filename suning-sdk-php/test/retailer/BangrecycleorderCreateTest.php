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
$req = new BangrecycleorderCreateRequest();
//赋值……
$req->setAssessedPrice("100.19");
$req->setAssessedTime("2021-04-01 11:12:13");
$req->setBrandName("虚空神机");
$req->setBuName("手机");
$req->setChannel("0");
$req->setColor("黑色");
$req->setCreateTime("2021-04-01 11:12:13");
$req->setCustCode("111111111111111111");
$req->setCustName("贝塔");
$req->setCustNickName("舒克");
$req->setCustNo("111111111111111111");
$req->setCustPhone("12312341234");
$req->setDealPrice("299.99");
$req->setImage("url");
$req->setImei("111111111111111");
$req->setMemberCode("111111111111111111");
$req->setModelName("huawei mate40 pro");
$req->setOrderCode("00000000001");
$req->setOrderForm("0");
$req->setRam("1T");
$req->setRecycleType("0");
$req->setStatus("0");
$req->setStoreCode("11111");

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