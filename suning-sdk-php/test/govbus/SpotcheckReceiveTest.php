<?php
/**
 * 
 *
 * @author suning
 * @date   2020-11-25
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new SpotcheckReceiveRequest();
//赋值……
$req->setContacts("张三（18651664932）");
$req->setGdsUrl("https://product.suning.com/0000000000/12148200303.html");
$req->setNonconformingItems("标签，甲醛");
$req->setOmsOrderId("10630349242");
$req->setOperatingType("1、新增  2、更新  3、撤销");
$req->setOrderCode("CJ2020190931414");
$req->setOrderStatus("1、检测中 2、初检完成 3、检测完成，无异议 4、异议中 5、维持原结论 6、更改结论");
$req->setQualifiedFlag("1、合格 2、不合格 3、有风险 4、无风险");
$req->setReportUrl("检测报告链接");
$req->setSamplingType("1、省级监督抽查 2、省级专项监督抽查 3、省级联动监督抽查 4、省级产品质量风险监测");
$req->setSponsor("1、江苏省局");
$req->setTestingInstitution("江苏省检疫局");
$req->setUpdateTime("2020-11-10 23:59:59");

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