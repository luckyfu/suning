<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-18
 */
class EnterprisedetailsQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $startNo;
	
	/**
	 * 
	 */
	private $size;
	
	/**
	 * 
	 */
	private $activityType;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getStartNo() {
		return $this->startNo;
	}
	
	public function setStartNo($startNo) {
		$this->startNo = $startNo;
		$this->apiParams["startNo"] = $startNo;
	}
	
	public function getSize() {
		return $this->size;
	}
	
	public function setSize($size) {
		$this->size = $size;
		$this->apiParams["size"] = $size;
	}
	
	public function getActivityType() {
		return $this->activityType;
	}
	
	public function setActivityType($activityType) {
		$this->activityType = $activityType;
		$this->apiParams["activityType"] = $activityType;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.enterprisedetails.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->startNo, 'startNo');
		RequestCheckUtil::checkNotNull($this->size, 'size');
	}
	
	public function getBizName(){
		return "queryEnterprisedetails";
	}
	
}

?>