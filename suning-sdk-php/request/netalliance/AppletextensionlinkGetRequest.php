<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-4-21
 */
class AppletextensionlinkGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $pid;
	
	/**
	 * 
	 */
	private $productUrl;
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $quanUrl;
	
	/**
	 * 
	 */
	private $subUser;
	
	/**
	 * 
	 */
	private $activityUrl;
	
	public function getPid() {
		return $this->pid;
	}
	
	public function setPid($pid) {
		$this->pid = $pid;
		$this->apiParams["pid"] = $pid;
	}
	
	public function getProductUrl() {
		return $this->productUrl;
	}
	
	public function setProductUrl($productUrl) {
		$this->productUrl = $productUrl;
		$this->apiParams["productUrl"] = $productUrl;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getQuanUrl() {
		return $this->quanUrl;
	}
	
	public function setQuanUrl($quanUrl) {
		$this->quanUrl = $quanUrl;
		$this->apiParams["quanUrl"] = $quanUrl;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getActivityUrl() {
		return $this->activityUrl;
	}
	
	public function setActivityUrl($activityUrl) {
		$this->activityUrl = $activityUrl;
		$this->apiParams["activityUrl"] = $activityUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.appletextensionlink.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getAppletextensionlink";
	}
	
}

?>