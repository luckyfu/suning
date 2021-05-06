<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-12-29
 */
class QueryregioneffectoverviewQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custnum;
	
	/**
	 * 
	 */
	private $dayType;
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $startDate;
	
	/**
	 * 
	 */
	private $throwType;
	
	public function getCustnum() {
		return $this->custnum;
	}
	
	public function setCustnum($custnum) {
		$this->custnum = $custnum;
		$this->apiParams["custnum"] = $custnum;
	}
	
	public function getDayType() {
		return $this->dayType;
	}
	
	public function setDayType($dayType) {
		$this->dayType = $dayType;
		$this->apiParams["dayType"] = $dayType;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getThrowType() {
		return $this->throwType;
	}
	
	public function setThrowType($throwType) {
		$this->throwType = $throwType;
		$this->apiParams["throwType"] = $throwType;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.queryregioneffectoverview.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custnum, 'custnum');
		RequestCheckUtil::checkNotNull($this->dayType, 'dayType');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
	}
	
	public function getBizName(){
		return "queryQueryregioneffectoverview";
	}
	
}

?>