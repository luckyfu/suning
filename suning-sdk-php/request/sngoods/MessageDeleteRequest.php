<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-23
 */
class MessageDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $msgList;
	
	/**
	 * 
	 */
	private $msgType;
	
	public function getMsgList() {
		return $this->msgList;
	}
	
	public function setMsgList($msgList) {
		$this->msgList = $msgList;
		$arr = array();
		foreach ($msgList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["msgList"] = $arr;
	}
	
	public function getMsgType() {
		return $this->msgType;
	}
	
	public function setMsgType($msgType) {
		$this->msgType = $msgType;
		$this->apiParams["msgType"] = $msgType;
	}
	
	public function getApiMethodName(){
		return 'suning.sngoods.message.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->msgType, 'msgType');
	}
	
	public function getBizName(){
		return "deleteMessage";
	}
	
}

class MsgList {

	private $apiParams = array();
	
	private $id;
	
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
		$this->apiParams["id"] = $id;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>