<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-20
 */
class CustmsgQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $messageOwner;
	
	/**
	 * 
	 */
	private $messageId;
	
	/**
	 * 
	 */
	private $messageVer;
	
	public function getMessageOwner() {
		return $this->messageOwner;
	}
	
	public function setMessageOwner($messageOwner) {
		$this->messageOwner = $messageOwner;
		$this->apiParams["messageOwner"] = $messageOwner;
	}
	
	public function getMessageId() {
		return $this->messageId;
	}
	
	public function setMessageId($messageId) {
		$this->messageId = $messageId;
		$this->apiParams["messageId"] = $messageId;
	}
	
	public function getMessageVer() {
		return $this->messageVer;
	}
	
	public function setMessageVer($messageVer) {
		$this->messageVer = $messageVer;
		$this->apiParams["messageVer"] = $messageVer;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.custmsg.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->messageOwner, 'messageOwner');
		RequestCheckUtil::checkNotNull($this->messageId, 'messageId');
	}
	
	public function getBizName(){
		return "queryCustmsg";
	}
	
}

?>