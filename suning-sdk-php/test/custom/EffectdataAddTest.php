<?php
/**
 * 
 *
 * @author suning
 * @date   2021-3-31
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new EffectdataAddRequest();
//赋值……
$req->setActivityId("20040614103860942631");
$req->setActivityPv("1");
$req->setActivityUv("1");
$req->setCloudDiamondCount("1");
$req->setDate("2021-03-01");
$req->setHelpCount("1");
$req->setInitInvitationCount("1");
$req->setNewJoinedCount("1");
$goodsEffectList = new GoodsEffectList();
$goodsEffectList->setGoodsCode("商品编码");
$goodsEffectList->setGoodsName("商品名称1");
$goodsEffectList->setScanGoodsCount("1");
$goodsEffectList->setScanGoodsNewUserCount("1");
$goodsEffectList->setScanGoodsUserCount("1");
$storeEffectList = new StoreEffectList();
$storeEffectList->setCouponCount("1");
$storeEffectList->setGoodsEffectList(array($goodsEffectList));
$storeEffectList->setJoinedCount("1");
$storeEffectList->setNewFansCount("1");
$storeEffectList->setNewMemberCount("1");
$storeEffectList->setScanStoreCount("1");
$storeEffectList->setScanStoreNewUserCount("1");
$storeEffectList->setScanStoreUserCount("1");
$storeEffectList->setStoreCode("70073822");
$storeEffectList->setStoreName("云南松下冰箱");
$storeEffectList->setStoreNewJoinedCount("1");
$req->setStoreEffectList(array($storeEffectList));
$req->setXhJoinedCount("1");
$req->setXhNewJoinedCount("1");

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