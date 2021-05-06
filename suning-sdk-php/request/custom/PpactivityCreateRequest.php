<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-24
 */
class PpactivityCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $activityTag;
	
	/**
	 * 
	 */
	private $activityType;
	
	/**
	 * 
	 */
	private $city;
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $promotionCrowd;
	
	/**
	 * 
	 */
	private $startTime;
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getActivityTag() {
		return $this->activityTag;
	}
	
	public function setActivityTag($activityTag) {
		$this->activityTag = $activityTag;
		$this->apiParams["activityTag"] = $activityTag;
	}
	
	public function getActivityType() {
		return $this->activityType;
	}
	
	public function setActivityType($activityType) {
		$this->activityType = $activityType;
		$this->apiParams["activityType"] = $activityType;
	}
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getPromotionCrowd() {
		return $this->promotionCrowd;
	}
	
	public function setPromotionCrowd($promotionCrowd) {
		$this->promotionCrowd = $promotionCrowd;
		$this->apiParams["promotionCrowd"] = $promotionCrowd;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ppactivity.create';
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
		return "createPpactivity";
	}
	
}

?>