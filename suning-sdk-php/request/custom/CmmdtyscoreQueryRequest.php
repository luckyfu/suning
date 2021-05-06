<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-20
 */
class CmmdtyscoreQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
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
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.cmmdtyscore.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryCmmdtyscore";
	}
	
}

?>