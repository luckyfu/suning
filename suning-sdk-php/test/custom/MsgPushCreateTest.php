<?php
/**
 * 
 *
 * @author suning
 * @date   2020-8-28
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new MsgPushCreateRequest();
//赋值……
$appMsg = new AppMsg();
$appMsg->setAction("https://cuxiao.suning.com/scms/bhnsj2020.html");
$appMsg->setActionParam("00060010225305*000600102252*31000051132*33004428539");
$appMsg->setActionType("0");
$appMsg->setCategory("900");
$appMsg->setContent("今天还没有签到哦，快来签到吧！");
$appMsg->setDisplayDay("15");
$appMsg->setImgUrl("http://image5.suning.cn/uimg/b2c/newcatentries/0010046166-000000000140028078_1_100x100.jpg");
$appMsg->setMapExt("* <p> * Key1：xdTitle， value：取浮层标题维护的内容 * <p> * Key2：xdContent， value：取浮层内容里面添加的内容：文本+变量");
$appMsg->setNotifyType("0");
$appMsg->setReceiverType("0");
$appMsg->setRemark("备注");
$appMsg->setTemplet("1");
$appMsg->setTitle("签到提醒");
$appMsg->setValidityDay("15");
$req->setAppMsg($appMsg);
$req->setMsgSceneCode("Y00370");
$req->setSnUnionId("69b75ba05b81eab12fa13eeda5da69b75ba1c5b81eab92fa");
$wxMiniProMsg = new WxMiniProMsg();
$wxMiniProMsg->setAppId("testApp");
$wxMiniProMsg->setDeviceVersion("设备版本号");
$wxMiniProMsg->setMsgContent("消息模板内容");
$wxMiniProMsg->setPageUrl("微信小程序内跳转链接地址");
$wxMiniProMsg->setSceneCode("0");
$wxMiniProMsg->setTempleId("zWiU8DFaL9f14EygPRSyo8ASVaDP-llc60LvUgXNKi8");
$req->setWxMiniProMsg($wxMiniProMsg);

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