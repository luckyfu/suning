<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-10-29
 */
class CommdtypackageQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $packageID;
	
	/**
	 * 
	 */
	private $shopId;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getPackageID() {
		return $this->packageID;
	}
	
	public function setPackageID($packageID) {
		$this->packageID = $packageID;
		$this->apiParams["packageID"] = $packageID;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.enable.commdtypackage.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->packageID, 'packageID');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
	}
	
	public function getBizName(){
		return "queryCommdtypackage";
	}
	
}

?>