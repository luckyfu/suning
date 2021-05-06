<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-24
 */
class RightsinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $levCode;
	
	/**
	 * 
	 */
	private $shopCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getLevCode() {
		return $this->levCode;
	}
	
	public function setLevCode($levCode) {
		$this->levCode = $levCode;
		$this->apiParams["levCode"] = $levCode;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.rightsinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryRightsinfo";
	}
	
}

?>