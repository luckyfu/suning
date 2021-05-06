<?php
/**
 * 
 *
 * @author suning
 * @date   2020-12-15
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new CreatestationCreateRequest();
//赋值……
$req->setAccessChannels("01");
$req->setAccessSource("01");
$req->setChannelCoding("2324");
$req->setDistributor("233");
$req->setKeyCustomerCode("112222");
$req->setOperationType("1");
$req->setPlatformId("sss");
$req->setPlatformName("12344");
$req->setShopId("12344");
$req->setSnAccount("78888");
$req->setStatus("0");
$req->setYhShopId("6789");
$req->setYhShopName("2232");
$req->setYhxbAccount("1232444");

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