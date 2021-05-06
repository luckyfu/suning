<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-19
 */
class BoxcodeQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $brandCode;
	
	/**
	 * 
	 */
	private $endTime;
	
	
	
	/**
	 * 
	 */
	private $skuCode;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $warehouseCode;
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	
	
	public function getSkuCode() {
		return $this->skuCode;
	}
	
	public function setSkuCode($skuCode) {
		$this->skuCode = $skuCode;
		$this->apiParams["skuCode"] = $skuCode;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.boxcode.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->brandCode, 'brandCode');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryBoxcode";
	}
	
}

?>