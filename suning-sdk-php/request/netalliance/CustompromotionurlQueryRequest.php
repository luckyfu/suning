<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-21
 */
class CustompromotionurlQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $adBookId;
	
	/**
	 * 
	 */
	private $pid;
	
	/**
	 * 
	 */
	private $subUser;
	
	/**
	 * 
	 */
	private $visitUrl;
	
	public function getAdBookId() {
		return $this->adBookId;
	}
	
	public function setAdBookId($adBookId) {
		$this->adBookId = $adBookId;
		$this->apiParams["adBookId"] = $adBookId;
	}
	
	public function getPid() {
		return $this->pid;
	}
	
	public function setPid($pid) {
		$this->pid = $pid;
		$this->apiParams["pid"] = $pid;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getVisitUrl() {
		return $this->visitUrl;
	}
	
	public function setVisitUrl($visitUrl) {
		$this->visitUrl = $visitUrl;
		$this->apiParams["visitUrl"] = $visitUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.custompromotionurl.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->visitUrl, 'visitUrl');
	}
	
	public function getBizName(){
		return "queryCustompromotionurl";
	}
	
}

?>