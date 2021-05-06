<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-20
 */
class MsgsendCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $actionTime;
	
	/**
	 * 
	 */
	private $messageTo;
	
	/**
	 * 
	 */
	private $messageId;
	
	/**
	 * 
	 */
	private $type;
	
	/**
	 * 
	 */
	private $content;
	
	public function getActionTime() {
		return $this->actionTime;
	}
	
	public function setActionTime($actionTime) {
		$this->actionTime = $actionTime;
		$this->apiParams["actionTime"] = $actionTime;
	}
	
	public function getMessageTo() {
		return $this->messageTo;
	}
	
	public function setMessageTo($messageTo) {
		$this->messageTo = $messageTo;
		$this->apiParams["messageTo"] = $messageTo;
	}
	
	public function getMessageId() {
		return $this->messageId;
	}
	
	public function setMessageId($messageId) {
		$this->messageId = $messageId;
		$this->apiParams["messageId"] = $messageId;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getContent() {
		return $this->content;
	}
	
	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.msgsend.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->actionTime, 'actionTime');
		RequestCheckUtil::checkNotNull($this->messageTo, 'messageTo');
		RequestCheckUtil::checkNotNull($this->messageId, 'messageId');
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "createMsgsend";
	}
	
}

?>