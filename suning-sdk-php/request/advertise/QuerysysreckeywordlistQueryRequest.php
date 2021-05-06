<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-22
 */
class QuerysysreckeywordlistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $unitId;
	
	/**
	 * 
	 */
	private $userType;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getUnitId() {
		return $this->unitId;
	}
	
	public function setUnitId($unitId) {
		$this->unitId = $unitId;
		$this->apiParams["unitId"] = $unitId;
	}
	
	public function getUserType() {
		return $this->userType;
	}
	
	public function setUserType($userType) {
		$this->userType = $userType;
		$this->apiParams["userType"] = $userType;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.querysysreckeywordlist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->unitId, 'unitId');
	}
	
	public function getBizName(){
		return "queryQuerysysreckeywordlist";
	}
	
}

?>