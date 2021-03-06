<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class OrderdiscountGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.orderdiscount.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "getOrderdiscount";
	}
	
}

?>