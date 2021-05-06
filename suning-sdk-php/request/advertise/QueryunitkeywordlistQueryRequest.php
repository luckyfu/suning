<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-22
 */
class QueryunitkeywordlistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $unitId;
	
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
	
	public function getApiMethodName(){
		return 'suning.advertise.queryunitkeywordlist.query';
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
		return "queryQueryunitkeywordlist";
	}
	
}

?>