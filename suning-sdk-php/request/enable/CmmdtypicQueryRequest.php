<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-17
 */
class CmmdtypicQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	/**
	 * 
	 */
	private $picType;
	
	/**
	 * 
	 */
	private $shopId;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getPicType() {
		return $this->picType;
	}
	
	public function setPicType($picType) {
		$this->picType = $picType;
		$this->apiParams["picType"] = $picType;
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
		return 'suning.enable.cmmdtypic.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
		RequestCheckUtil::checkNotNull($this->picType, 'picType');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryCmmdtypic";
	}
	
}

?>