<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-19
 */
class DailyresponseConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $accountNo;
	
	/**
	 * 
	 */
	private $failureCode;
	
	/**
	 * 
	 */
	private $failureReason;
	
	/**
	 * 
	 */
	private $returnFlag;
	
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
	
	public function getFailureCode() {
		return $this->failureCode;
	}
	
	public function setFailureCode($failureCode) {
		$this->failureCode = $failureCode;
		$this->apiParams["failureCode"] = $failureCode;
	}
	
	public function getFailureReason() {
		return $this->failureReason;
	}
	
	public function setFailureReason($failureReason) {
		$this->failureReason = $failureReason;
		$this->apiParams["failureReason"] = $failureReason;
	}
	
	public function getReturnFlag() {
		return $this->returnFlag;
	}
	
	public function setReturnFlag($returnFlag) {
		$this->returnFlag = $returnFlag;
		$this->apiParams["returnFlag"] = $returnFlag;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.labor.dailyresponse.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accountNo, 'accountNo');
		RequestCheckUtil::checkNotNull($this->returnFlag, 'returnFlag');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "confirmDailyresponse";
	}
	
}

?>