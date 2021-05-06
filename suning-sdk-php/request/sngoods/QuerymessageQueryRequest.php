<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-23
 */
class QuerymessageQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $msgType;
	
	
	
	public function getMsgType() {
		return $this->msgType;
	}
	
	public function setMsgType($msgType) {
		$this->msgType = $msgType;
		$this->apiParams["msgType"] = $msgType;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.sngoods.querymessage.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->msgType, 'msgType');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
	}
	
	public function getBizName(){
		return "queryQuerymessage";
	}
	
}

?>