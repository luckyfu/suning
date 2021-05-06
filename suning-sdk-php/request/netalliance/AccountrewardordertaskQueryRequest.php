<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-8
 */
class AccountrewardordertaskQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $accountingDate;
	
	/**
	 * 
	 */
	private $missionId;
	
	/**
	 * 
	 */
	private $pageId;
	
	public function getAccountingDate() {
		return $this->accountingDate;
	}
	
	public function setAccountingDate($accountingDate) {
		$this->accountingDate = $accountingDate;
		$this->apiParams["accountingDate"] = $accountingDate;
	}
	
	public function getMissionId() {
		return $this->missionId;
	}
	
	public function setMissionId($missionId) {
		$this->missionId = $missionId;
		$this->apiParams["missionId"] = $missionId;
	}
	
	public function getPageId() {
		return $this->pageId;
	}
	
	public function setPageId($pageId) {
		$this->pageId = $pageId;
		$this->apiParams["pageId"] = $pageId;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.accountrewardordertask.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accountingDate, 'accountingDate');
	}
	
	public function getBizName(){
		return "queryAccountrewardordertask";
	}
	
}

?>