<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-19
 */
class MonthlyresponseConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $accountNo;
	
	/**
	 * 
	 */
	private $failureFlag;
	
	/**
	 * 
	 */
	private $failureReason;
	
	/**
	 * 
	 */
	private $returnFlag;
	
	public function getAccountNo() {
		return $this->accountNo;
	}
	
	public function setAccountNo($accountNo) {
		$this->accountNo = $accountNo;
		$this->apiParams["accountNo"] = $accountNo;
	}
	
	public function getFailureFlag() {
		return $this->failureFlag;
	}
	
	public function setFailureFlag($failureFlag) {
		$this->failureFlag = $failureFlag;
		$this->apiParams["failureFlag"] = $failureFlag;
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
	
	public function getApiMethodName(){
		return 'suning.labor.monthlyresponse.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accountNo, 'accountNo');
		RequestCheckUtil::checkNotNull($this->returnFlag, 'returnFlag');
	}
	
	public function getBizName(){
		return "confirmMonthlyresponse";
	}
	
}

?>