<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-11-27
 */
class InteractactivityCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityDes;
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $activityType;
	
	/**
	 * 
	 */
	private $activityUrl;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $storeCodes;
	
	public function getActivityDes() {
		return $this->activityDes;
	}
	
	public function setActivityDes($activityDes) {
		$this->activityDes = $activityDes;
		$this->apiParams["activityDes"] = $activityDes;
	}
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getActivityType() {
		return $this->activityType;
	}
	
	public function setActivityType($activityType) {
		$this->activityType = $activityType;
		$this->apiParams["activityType"] = $activityType;
	}
	
	public function getActivityUrl() {
		return $this->activityUrl;
	}
	
	public function setActivityUrl($activityUrl) {
		$this->activityUrl = $activityUrl;
		$this->apiParams["activityUrl"] = $activityUrl;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getStoreCodes() {
		return $this->storeCodes;
	}
	
	public function setStoreCodes($storeCodes) {
		$this->storeCodes = $storeCodes;
		$this->apiParams["storeCodes"] = $storeCodes;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.interactactivity.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityName, 'activityName');
		RequestCheckUtil::checkNotNull($this->activityType, 'activityType');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "createInteractactivity";
	}
	
}

?>