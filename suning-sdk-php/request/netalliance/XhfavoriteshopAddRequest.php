<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-29
 */
class XhfavoriteshopAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $phone;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getPhone() {
		return $this->phone;
	}
	
	public function setPhone($phone) {
		$this->phone = $phone;
		$this->apiParams["phone"] = $phone;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.xhfavoriteshop.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->phone, 'phone');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "addXhfavoriteshop";
	}
	
}

?>