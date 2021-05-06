<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-28
 */
class MsgPushCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appMsg;
	
	/**
	 * 
	 */
	private $msgSceneCode;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $wxMiniProMsg;
	
	public function getAppMsg() {
		return $this->appMsg;
	}
	
	public function setAppMsg($appMsg) {
		$this->appMsg = $appMsg;
		$this->apiParams["appMsg"] = $appMsg->getApiParams();
	}
	
	public function getMsgSceneCode() {
		return $this->msgSceneCode;
	}
	
	public function setMsgSceneCode($msgSceneCode) {
		$this->msgSceneCode = $msgSceneCode;
		$this->apiParams["msgSceneCode"] = $msgSceneCode;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getWxMiniProMsg() {
		return $this->wxMiniProMsg;
	}
	
	public function setWxMiniProMsg($wxMiniProMsg) {
		$this->wxMiniProMsg = $wxMiniProMsg;
		$this->apiParams["wxMiniProMsg"] = $wxMiniProMsg->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.custom.msgPush.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->msgSceneCode, 'msgSceneCode');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
	}
	
	public function getBizName(){
		return "createMsgPush";
	}
	
}

class WxMiniProMsg {

	private $apiParams = array();
	
	private $appId;
	
	private $deviceVersion;
	
	private $msgContent;
	
	private $pageUrl;
	
	private $sceneCode;
	
	private $templeId;
	
	public function getAppId() {
		return $this->appId;
	}

	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getDeviceVersion() {
		return $this->deviceVersion;
	}

	public function setDeviceVersion($deviceVersion) {
		$this->deviceVersion = $deviceVersion;
		$this->apiParams["deviceVersion"] = $deviceVersion;
	}
	
	public function getMsgContent() {
		return $this->msgContent;
	}

	public function setMsgContent($msgContent) {
		$this->msgContent = $msgContent;
		$this->apiParams["msgContent"] = $msgContent;
	}
	
	public function getPageUrl() {
		return $this->pageUrl;
	}

	public function setPageUrl($pageUrl) {
		$this->pageUrl = $pageUrl;
		$this->apiParams["pageUrl"] = $pageUrl;
	}
	
	public function getSceneCode() {
		return $this->sceneCode;
	}

	public function setSceneCode($sceneCode) {
		$this->sceneCode = $sceneCode;
		$this->apiParams["sceneCode"] = $sceneCode;
	}
	
	public function getTempleId() {
		return $this->templeId;
	}

	public function setTempleId($templeId) {
		$this->templeId = $templeId;
		$this->apiParams["templeId"] = $templeId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class AppMsg {

	private $apiParams = array();
	
	private $action;
	
	private $actionParam;
	
	private $actionType;
	
	private $category;
	
	private $content;
	
	private $displayDay;
	
	private $imgUrl;
	
	private $mapExt;
	
	private $notifyType;
	
	private $receiverType;
	
	private $remark;
	
	private $templet;
	
	private $title;
	
	private $validityDay;
	
	public function getAction() {
		return $this->action;
	}

	public function setAction($action) {
		$this->action = $action;
		$this->apiParams["action"] = $action;
	}
	
	public function getActionParam() {
		return $this->actionParam;
	}

	public function setActionParam($actionParam) {
		$this->actionParam = $actionParam;
		$this->apiParams["actionParam"] = $actionParam;
	}
	
	public function getActionType() {
		return $this->actionType;
	}

	public function setActionType($actionType) {
		$this->actionType = $actionType;
		$this->apiParams["actionType"] = $actionType;
	}
	
	public function getCategory() {
		return $this->category;
	}

	public function setCategory($category) {
		$this->category = $category;
		$this->apiParams["category"] = $category;
	}
	
	public function getContent() {
		return $this->content;
	}

	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
	
	public function getDisplayDay() {
		return $this->displayDay;
	}

	public function setDisplayDay($displayDay) {
		$this->displayDay = $displayDay;
		$this->apiParams["displayDay"] = $displayDay;
	}
	
	public function getImgUrl() {
		return $this->imgUrl;
	}

	public function setImgUrl($imgUrl) {
		$this->imgUrl = $imgUrl;
		$this->apiParams["imgUrl"] = $imgUrl;
	}
	
	public function getMapExt() {
		return $this->mapExt;
	}

	public function setMapExt($mapExt) {
		$this->mapExt = $mapExt;
		$this->apiParams["mapExt"] = $mapExt;
	}
	
	public function getNotifyType() {
		return $this->notifyType;
	}

	public function setNotifyType($notifyType) {
		$this->notifyType = $notifyType;
		$this->apiParams["notifyType"] = $notifyType;
	}
	
	public function getReceiverType() {
		return $this->receiverType;
	}

	public function setReceiverType($receiverType) {
		$this->receiverType = $receiverType;
		$this->apiParams["receiverType"] = $receiverType;
	}
	
	public function getRemark() {
		return $this->remark;
	}

	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getTemplet() {
		return $this->templet;
	}

	public function setTemplet($templet) {
		$this->templet = $templet;
		$this->apiParams["templet"] = $templet;
	}
	
	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		$this->apiParams["title"] = $title;
	}
	
	public function getValidityDay() {
		return $this->validityDay;
	}

	public function setValidityDay($validityDay) {
		$this->validityDay = $validityDay;
		$this->apiParams["validityDay"] = $validityDay;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>