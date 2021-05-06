<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-30
 */
class PushrecommendcmmdtyAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $gdsCd;
	
	/**
	 * 
	 */
	private $membId;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $shopId;
	
	/**
	 * 
	 */
	private $spStrCd;
	
	/**
	 * 
	 */
	private $statisDate;
	
	/**
	 * 
	 */
	private $strCd;
	
	public function getGdsCd() {
		return $this->gdsCd;
	}
	
	public function setGdsCd($gdsCd) {
		$this->gdsCd = $gdsCd;
		$this->apiParams["gdsCd"] = $gdsCd;
	}
	
	public function getMembId() {
		return $this->membId;
	}
	
	public function setMembId($membId) {
		$this->membId = $membId;
		$this->apiParams["membId"] = $membId;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getSpStrCd() {
		return $this->spStrCd;
	}
	
	public function setSpStrCd($spStrCd) {
		$this->spStrCd = $spStrCd;
		$this->apiParams["spStrCd"] = $spStrCd;
	}
	
	public function getStatisDate() {
		return $this->statisDate;
	}
	
	public function setStatisDate($statisDate) {
		$this->statisDate = $statisDate;
		$this->apiParams["statisDate"] = $statisDate;
	}
	
	public function getStrCd() {
		return $this->strCd;
	}
	
	public function setStrCd($strCd) {
		$this->strCd = $strCd;
		$this->apiParams["strCd"] = $strCd;
	}
	
	public function getApiMethodName(){
		return 'suning.nearbycloud.pushrecommendcmmdty.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->gdsCd, 'gdsCd');
		RequestCheckUtil::checkNotNull($this->membId, 'membId');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
		RequestCheckUtil::checkNotNull($this->spStrCd, 'spStrCd');
		RequestCheckUtil::checkNotNull($this->statisDate, 'statisDate');
		RequestCheckUtil::checkNotNull($this->strCd, 'strCd');
	}
	
	public function getBizName(){
		return "addPushrecommendcmmdty";
	}
	
}

?>