<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-29
 */
class MessagepoolnotifyQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $messageType;
	
	/**
	 * 
	 */
	private $shopId;
	
	public function getMessageType() {
		return $this->messageType;
	}
	
	public function setMessageType($messageType) {
		$this->messageType = $messageType;
		$this->apiParams["messageType"] = $messageType;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getApiMethodName(){
		return 'suning.enable.messagepoolnotify.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->messageType, 'messageType');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
	}
	
	public function getBizName(){
		return "queryMessagepoolnotify";
	}
	
}

?>