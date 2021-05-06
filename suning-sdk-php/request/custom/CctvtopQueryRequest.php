<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-17
 */
class CctvtopQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $requestId;
	
	/**
	 * 
	 */
	private $uid;
	
	public function getRequestId() {
		return $this->requestId;
	}
	
	public function setRequestId($requestId) {
		$this->requestId = $requestId;
		$this->apiParams["requestId"] = $requestId;
	}
	
	public function getUid() {
		return $this->uid;
	}
	
	public function setUid($uid) {
		$this->uid = $uid;
		$this->apiParams["uid"] = $uid;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.cctvtop.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->requestId, 'requestId');
		RequestCheckUtil::checkNotNull($this->uid, 'uid');
	}
	
	public function getBizName(){
		return "queryCctvtop";
	}
	
}

?>