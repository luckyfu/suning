<?php
/**
 * 
 *
 * @author suning
 * @date   2021-4-21
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new YqgaddressReceiveRequest();
//赋值……
$addressMessage = new AddressMessage();
$addressMessage->setAddress("1234");
$addressMessage->setAddressId("123123");
$addressMessage->setCityId("123");
$addressMessage->setCityName("市级地址名称");
$addressMessage->setCountyId("123");
$addressMessage->setCountyName("区级地址名称");
$addressMessage->setMobile("12345678900");
$addressMessage->setProvinceId("1234");
$addressMessage->setProvinceName("省级地址名称");
$addressMessage->setReceiver("123");
$addressMessage->setTelephone("123");
$addressMessage->setTownId("123");
$addressMessage->setTownName("镇级地址名称");
$req->setAddressMessage(array($addressMessage));
$req->setOperatorNo("123123");
$req->setSysCode("12314");
$req->setType("1");
$req->setUid("123456");

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