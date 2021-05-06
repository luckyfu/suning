<?php
/**
 * 
 *
 * @author suning
 * @date   2020-10-30
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ChannelAddRequest();
//赋值……
$mediaInputs = new MediaInputs();
$mediaInputs->setAddress("玄武大道1号");
$mediaInputs->setAreaName("玄武区");
$mediaInputs->setBuildingNumber("50");
$mediaInputs->setBusinessHours("12");
$mediaInputs->setCategoryCode("AdPosition_SmallShop_Type_video2");
$mediaInputs->setCityName("南京市");
$mediaInputs->setContractNumber("SN12239991");
$mediaInputs->setCoverNumber("10000");
$mediaInputs->setCpmPrice("100.01");
$mediaInputs->setCptMaxPlayTimes("100");
$mediaInputs->setCptMediaMode("1");
$mediaInputs->setCptPlayTimes("200");
$mediaInputs->setCptPrice("100.01");
$mediaInputs->setCptPublishDates("1,2,3,4,5");
$mediaInputs->setCptSalesTimes("300");
$mediaInputs->setDetailedLocation("紫金嘉悦东大门门口");
$mediaInputs->setDuration("day");
$mediaInputs->setFloor("3F");
$mediaInputs->setFloorSpace("40.15");
$mediaInputs->setHeight("10.11");
$mediaInputs->setIsVertical("1");
$mediaInputs->setIsVoice("1");
$mediaInputs->setLatitude("26.068504");
$mediaInputs->setLength("10.11");
$mediaInputs->setLongitude("119.292912");
$mediaInputs->setMaterialSize("100*100*100");
$mediaInputs->setMaterialTime("15");
$mediaInputs->setMediaId("98N7");
$mediaInputs->setMediaNumber("50");
$mediaInputs->setMediaPicture("http://www.suning.com/1,jpg");
$mediaInputs->setMediaPlayDuration("5|15|30|60");
$mediaInputs->setOperate("0");
$mediaInputs->setParkingSpace("110");
$mediaInputs->setPassengerNumber("1000000");
$mediaInputs->setPrice("150.66");
$mediaInputs->setProhibitedContent("医药类");
$mediaInputs->setPropertyCosts("100.98");
$mediaInputs->setProvinceName("江苏省");
$mediaInputs->setRemarks("这是电子屏");
$mediaInputs->setResolution("1920X1080");
$mediaInputs->setSalesType("1");
$mediaInputs->setScreenPosition("1|2|3|4|5");
$mediaInputs->setSenceId("1001");
$mediaInputs->setShopName("紫金嘉悦");
$mediaInputs->setShopNumber("5");
$mediaInputs->setShopProperty("性质属性");
$mediaInputs->setShowPosition("1");
$mediaInputs->setStoreTypes("19");
$mediaInputs->setUnitCount("10");
$mediaInputs->setUnitNumber("3");
$mediaInputs->setWidth("10.11");
$req->setMediaInputs(array($mediaInputs));
$req->setStoreType("19");

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