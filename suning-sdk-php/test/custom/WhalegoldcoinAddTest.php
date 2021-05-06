<?php
/**
 * 
 *
 * @author suning
 * @date   2020-7-25
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new WhalegoldcoinAddRequest();
//赋值……
$req->setActivityCode("whaleSuprise");
$req->setOutSerialNo("1594802299");
$req->setQuantity("1000");
$req->setReveiveTime("1594802299");
$req->setSign("33fd9ad3a21b342a7f1a67e8992aabcd");
$req->setSnUnionId("bfb3ae009a31e98f4fa13ee41c6cbfb3ae01f9a31e9884fa");
$req->setVersion("1.0.0");
$req->setSnUnionIdTwo("bfb3ae009a31e98f4fa13ee41c6cbfb3ae01f9a31e9884fa");

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