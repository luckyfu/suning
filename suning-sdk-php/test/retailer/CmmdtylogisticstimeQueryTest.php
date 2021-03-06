<?php
/**
 * 
 *
 * @author suning
 * @date   2019-7-29
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new CmmdtylogisticstimeQueryRequest();
//赋值……
$req->setAppId("666666");
$cmmdtyList = new CmmdtyList();
$cmmdtyList->setAddress("详细地址");
$cmmdtyList->setCityCode("025");
$cmmdtyList->setCmmdtyCode("000000000100004919");
$cmmdtyList->setDistributorCode("0000000000");
$cmmdtyList->setDistrictCode("01");
$cmmdtyList->setIsPrototype("1");
$cmmdtyList->setItemNo("1");
$cmmdtyList->setQuantity("1");
$cmmdtyList->setSelectedArrivalTime("2018-07-30-1");
$cmmdtyList->setTownCode("01");
$req->setCmmdtyList(array($cmmdtyList));

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