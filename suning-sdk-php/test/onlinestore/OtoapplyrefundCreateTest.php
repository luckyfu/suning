<?php
/**
 * 
 *
 * @author suning
 * @date   2020-4-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new OtoapplyrefundCreateRequest();
//赋值……
$req->setApplyType("01");
$req->setOperateTime("20180412153723");
$req->setOrderId("12312312312");
$orderItemIdList = new OrderItemIdList();
$orderItemIdList->setOrderItemId("121212212122");
$req->setOrderItemIdList(array($orderItemIdList));
$req->setOrderPort("01");
$req->setPictureURL("www.baidu.com;www.baidu.com;www.baidu.com");
$req->setReasonDes("买多了");
$req->setReasonName("消费者不想要了");
$req->setRetReasonCode("030");

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