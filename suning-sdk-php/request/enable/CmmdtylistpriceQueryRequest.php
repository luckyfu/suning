<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-15
 */
class CmmdtylistpriceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $city;
	
	/**
	 * 
	 */
	private $cmmdtyInfo;
	
	/**
	 * 
	 */
	private $province;
	
	/**
	 * 
	 */
	private $shopId;
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getCmmdtyInfo() {
		return $this->cmmdtyInfo;
	}
	
	public function setCmmdtyInfo($cmmdtyInfo) {
		$this->cmmdtyInfo = $cmmdtyInfo;
		$arr = array();
		foreach ($cmmdtyInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyInfo"] = $arr;
	}
	
	public function getProvince() {
		return $this->province;
	}
	
	public function setProvince($province) {
		$this->province = $province;
		$this->apiParams["province"] = $province;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getApiMethodName(){
		return 'suning.enable.cmmdtylistprice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->city, 'city');
		RequestCheckUtil::checkNotNull($this->province, 'province');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
	}
	
	public function getBizName(){
		return "queryCmmdtylistprice";
	}
	
}

class CmmdtyInfo {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	private $supplierCode;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>