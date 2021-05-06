<?php
/**
 * 
 *
 * @author suning
 * @date   2020-9-16
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new StatementGetRequest();
//赋值……
$detail = new Detail();
$detail->setDetailGuid("1111");
$detail->setJctype("A");
$detail->setNoteItem("无");
$detail->setServiceOrder("7312952676");
$detail->setZawf("0");
$detail->setZblpf("0");
$detail->setZbtje("10");
$detail->setZbtyy("A0001");
$detail->setZbtyyDesc("空调旺季补贴");
$detail->setZcjorder("A700020160310583354");
$detail->setZcjtzkpje("125");
$detail->setZcjyjje("100");
$detail->setZjlje("20");
$detail->setZjlyy("C0001");
$detail->setZjlyyDesc("安装技术好");
$detail->setZkfje("5");
$detail->setZkfyy("B0001");
$detail->setZkfyyDesc("顾客投诉");
$detail->setZno("1111");
$detail->setZpjf("0");
$detail->setZqtf("0");
$req->setDetail(array($detail));
$req->setFactoryBp("10");
$req->setGuid("u00000000001");
$req->setNoteHeader("300");
$req->setZawbs("1");
$req->setZcjsqdm("123456789");
$req->setZkpje("123456");

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