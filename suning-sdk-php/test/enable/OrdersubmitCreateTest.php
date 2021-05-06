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
$req = new OrdersubmitCreateRequest();
//赋值……
$payInfo = new PayInfo();
$payInfo->setPayCode("001");
$payInfo->setPayName("微信支付");
$fullReductionInfo = new FullReductionInfo();
$fullReductionInfo->setBonusId("2079097");
$fullReductionInfo->setFullReductionAmount("2.00");
$fullReductionInfo->setFullReductionType("1");
$fullReductionInfo->setPromotionName("满100减99");
$fullReductionInfo->setPromotionNum("1233434");
$fullReductionInfo->setProvider("01");
$couponInfo = new CouponInfo();
$couponInfo->setCouponAmount("1.00");
$couponInfo->setCouponCode("21212");
$couponInfo->setCouponName("易券");
$couponInfo->setCouponType("01");
$collectionInfo = new CollectionInfo();
$collectionInfo->setCollectionCode("1");
$collectionInfo->setCollectionSort("1");
$collectionInfo->setCollectionType("1");
$activityInfo = new ActivityInfo();
$activityInfo->setActivityCode("12222");
$activityInfo->setActivityName("端午优惠");
$platFormOrder = new PlatFormOrder();
$platFormOrder->setActivityInfo(array($activityInfo));
$platFormOrder->setBusinessSign("0");
$platFormOrder->setCollectionInfo(array($collectionInfo));
$platFormOrder->setCouponInfo(array($couponInfo));
$platFormOrder->setFullReductionInfo(array($fullReductionInfo));
$platFormOrder->setOrderItemId("22222222222222");
$platFormOrder->setOrderPayment("10.00");
$platFormOrder->setPayInfo(array($payInfo));
$platFormOrder->setPostage("5.00");
$platFormOrder->setPrice("100.00");
$platFormOrder->setSaleNum("3");
$platFormOrder->setSkuId("1234");
$platFormOrder->setSnSkuId("123456789");
$platFormOrder->setSupplierCode("0000000000");
$platFormOrder->setTotalFee("12.00");
$platFormTrade = new PlatFormTrade();
$platFormTrade->setBusinessType("0");
$platFormTrade->setChanId("01");
$platFormTrade->setMemberNo("23456543");
$platFormTrade->setOrderId("123342312");
$platFormTrade->setOrderTime("yyyy-MM-dd HH:mm:ss");
$platFormTrade->setOrderType("A001");
$platFormTrade->setPayment("100.00");
$platFormTrade->setPlatFormOrder(array($platFormOrder));
$platFormTrade->setReceiverAddress("修文路9号");
$platFormTrade->setReceiverCityName("南京市");
$platFormTrade->setReceiverCountyName("江宁区");
$platFormTrade->setReceiverMobile("12345678900");
$platFormTrade->setReceiverName("张三");
$platFormTrade->setReceiverNationality("中国");
$platFormTrade->setReceiverPhone("025-22222222");
$platFormTrade->setReceiverProvinceName("江苏省");
$platFormTrade->setReceiverStreetName("淳化街道");
$platFormTrade->setReceiverZip("210000");
$platFormTrade->setShopId("123456");
$platFormTrade->setTotalNo("2");
$req->setPlatFormTrade($platFormTrade);

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