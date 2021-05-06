<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-24
 */
class RightsinfoModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $levCode;
	
	/**
	 * 
	 */
	private $levRule;
	
	/**
	 * 
	 */
	private $rightCode;
	
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
	
	public function getLevRule() {
		return $this->levRule;
	}
	
	public function setLevRule($levRule) {
		$this->levRule = $levRule;
		$this->apiParams["levRule"] = $levRule;
	}
	
	public function getRightCode() {
		return $this->rightCode;
	}
	
	public function setRightCode($rightCode) {
		$this->rightCode = $rightCode;
		$this->apiParams["rightCode"] = $rightCode;
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
		return 'suning.custom.rightsinfo.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->levCode, 'levCode');
		RequestCheckUtil::checkNotNull($this->levRule, 'levRule');
		RequestCheckUtil::checkNotNull($this->rightCode, 'rightCode');
		RequestCheckUtil::checkNotNull($this->shopCode, 'shopCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "modifyRightsinfo";
	}
	
}

?>