<?php
/**
 * 
 *
 * @author suning
 * @date   2020-9-21
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new UnitlistQueryRequest();
//赋值……
$req->setCustnum("777777");
$req->setEndDate("yyyy-MM-dd");
$req->setGoodsCode("10456777");
$req->setName("大促");
$req->setOrderBy("可为空，默认按更新时间倒序，可自己设置的排序字段如下：orderByFields.add(showNum);");
$req->setPageNum("1");
$req->setPagerSize("10");
$req->setPromotionId("4444444");
$req->setPromotionStatus("-2");
$req->setPromotionType("可为空，-1或为空查询全部");
$req->setStartDate("yyyy-MM-dd");
$req->setUnitStatus("-1  0:暂停推广，1：正在推广");

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