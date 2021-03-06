<?php
/**
 * 
 *
 * @author suning
 * @date   2019-3-29
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new PublishcmAddRequest();
//赋值……
$req->setAssortCode("11111111");
$childItem = new ChildItem();
$childItem->setItemCode("561");
$childItem->setPrice("11");
$childItem->setProductCode("104007723");
$childItem->setSupplierImg1Url("1");
$req->setChildItem(array($childItem));
$req->setCmTitle("11");
$detailModule = new DetailModule();
$detailModule->setContent("模块化详情内容");
$detailModule->setModuleId("1");
$detailModule->setModuleName("1");
$detailModule->setNum("1");
$detailModule->setType("cat_mod");
$req->setDetailModule(array($detailModule));
$req->setIntroduction("商家商品介绍");
$req->setItemCode("789123");
$req->setMainPicVideoCode("108625");
$packingList = new PackingList();
$packingList->setPackingListName("	电脑");
$packingList->setPackingListQty("1");
$req->setPackingList(array($packingList));
$req->setPrice("5.00");
$req->setProductCode("102652866");
$req->setSaleDate("2016-09-30");
$req->setSaleSet("1");
$req->setSellPoint("卖点");
$req->setSupplierImg1Url("1");
$req->setSupplierImg2Url("1");
$req->setSupplierImg3Url("1");
$req->setSupplierImg4Url("1");
$req->setSupplierImg5Url("1");
$req->setTargetChannel("1");
$req->setVideoCode("108625");

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