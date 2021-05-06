<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-27
 */
class WeiboproductinfoGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $detailUrl;
	
	/**
	 * 
	 */
	private $isGetBuyUrl;
	
	/**
	 * 
	 */
	private $isShare;
	
	/**
	 * 
	 */
	private $subUser;
	
	/**
	 * 
	 */
	private $wbShareId;
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getDetailUrl() {
		return $this->detailUrl;
	}
	
	public function setDetailUrl($detailUrl) {
		$this->detailUrl = $detailUrl;
		$this->apiParams["detailUrl"] = $detailUrl;
	}
	
	public function getIsGetBuyUrl() {
		return $this->isGetBuyUrl;
	}
	
	public function setIsGetBuyUrl($isGetBuyUrl) {
		$this->isGetBuyUrl = $isGetBuyUrl;
		$this->apiParams["isGetBuyUrl"] = $isGetBuyUrl;
	}
	
	public function getIsShare() {
		return $this->isShare;
	}
	
	public function setIsShare($isShare) {
		$this->isShare = $isShare;
		$this->apiParams["isShare"] = $isShare;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getWbShareId() {
		return $this->wbShareId;
	}
	
	public function setWbShareId($wbShareId) {
		$this->wbShareId = $wbShareId;
		$this->apiParams["wbShareId"] = $wbShareId;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.weiboproductinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->detailUrl, 'detailUrl');
	}
	
	public function getBizName(){
		return "getWeiboproductinfo";
	}
	
}

?>