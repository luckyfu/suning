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
$req = new GetpromotionrephourbypageQueryRequest();
//赋值……
$req->setCustnum("777777");
$req->setDayType("范围：_3day：3天，_7day：7天，_15day：15天");
$req->setOrderBy("可为空，默认按更新时间倒序，可自己设置的排序字段如下：orderByFields.add(showNum);");
$req->setPagerNumber("1");
$req->setPagerSize("11");
$req->setPromotionDate("计划时间");
$req->setPromotionId("777777");
$req->setPromotionName("计划名称");
$req->setReportType("默认值：2");
$req->setThrowType("0：pc,1:mobile,其他：全部");

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