<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-19
 */
class MonthlydetailQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $accountNo;
	
	
	
	public function getAccountNo() {
		return $this->accountNo;
	}
	
	public function setAccountNo($accountNo) {
		$this->accountNo = $accountNo;
		$this->apiParams["accountNo"] = $accountNo;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.labor.monthlydetail.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accountNo, 'accountNo');
	}
	
	public function getBizName(){
		return "queryMonthlydetail";
	}
	
}

?>