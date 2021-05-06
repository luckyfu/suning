<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-19
 */
class DailyflagQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $accountNo;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getAccountNo() {
		return $this->accountNo;
	}
	
	public function setAccountNo($accountNo) {
		$this->accountNo = $accountNo;
		$this->apiParams["accountNo"] = $accountNo;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.labor.dailyflag.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accountNo, 'accountNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryDailyflag";
	}
	
}

?>