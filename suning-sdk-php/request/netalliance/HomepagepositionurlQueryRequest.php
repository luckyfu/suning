<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-2-1
 */
class HomepagepositionurlQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $subUser;
	
	/**
	 * 
	 */
	private $backUrl;
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getBackUrl() {
		return $this->backUrl;
	}
	
	public function setBackUrl($backUrl) {
		$this->backUrl = $backUrl;
		$this->apiParams["backUrl"] = $backUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.homepagepositionurl.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryHomepagepositionurl";
	}
	
}

?>