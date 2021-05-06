<?php
/**
 * 
 *
 * @author suning
 * @date   2021-4-6
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ProductsearchQueryRequest();
//赋值……
$req->setAggregate("1");
$req->setAttrList("无线网络");
$req->setBrandId("0IAC");
$req->setCategoryIdOne("4469083c-0177-4cdc-a1c4-dac8a7401ed1");
$req->setCategoryIdThree("c6de2d79-fc38-4e5f-9517-c7e8de4e9e1a");
$req->setCategoryIdTwo("7928706a-2536-4b0c-8a6c-d9173ee43b95");
$req->setCityCode("025");
$req->setLimit("200");
$req->setMax("200");
$req->setMin("100");
$req->setPage("1");
$req->setSearchContent("惠普打印机");
$req->setSortType("1");

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