<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-11
 */
class PrizeReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $detect;
	
	/**
	 * 
	 */
	private $deviceId;
	
	/**
	 * 
	 */
	private $dfpToken;
	
	/**
	 * 
	 */
	private $ipAddress;
	
	/**
	 * 
	 */
	private $isRisk;
	
	/**
	 * 
	 */
	private $memberId;
	
	/**
	 * 
	 */
	private $subActivityId;
	
	/**
	 * 
	 */
	private $systemId;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getDetect() {
		return $this->detect;
	}
	
	public function setDetect($detect) {
		$this->detect = $detect;
		$this->apiParams["detect"] = $detect;
	}
	
	public function getDeviceId() {
		return $this->deviceId;
	}
	
	public function setDeviceId($deviceId) {
		$this->deviceId = $deviceId;
		$this->apiParams["deviceId"] = $deviceId;
	}
	
	public function getDfpToken() {
		return $this->dfpToken;
	}
	
	public function setDfpToken($dfpToken) {
		$this->dfpToken = $dfpToken;
		$this->apiParams["dfpToken"] = $dfpToken;
	}
	
	public function getIpAddress() {
		return $this->ipAddress;
	}
	
	public function setIpAddress($ipAddress) {
		$this->ipAddress = $ipAddress;
		$this->apiParams["ipAddress"] = $ipAddress;
	}
	
	public function getIsRisk() {
		return $this->isRisk;
	}
	
	public function setIsRisk($isRisk) {
		$this->isRisk = $isRisk;
		$this->apiParams["isRisk"] = $isRisk;
	}
	
	public function getMemberId() {
		return $this->memberId;
	}
	
	public function setMemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParams["memberId"] = $memberId;
	}
	
	public function getSubActivityId() {
		return $this->subActivityId;
	}
	
	public function setSubActivityId($subActivityId) {
		$this->subActivityId = $subActivityId;
		$this->apiParams["subActivityId"] = $subActivityId;
	}
	
	public function getSystemId() {
		return $this->systemId;
	}
	
	public function setSystemId($systemId) {
		$this->systemId = $systemId;
		$this->apiParams["systemId"] = $systemId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.prize.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->isRisk, 'isRisk');
		RequestCheckUtil::checkNotNull($this->memberId, 'memberId');
		RequestCheckUtil::checkNotNull($this->subActivityId, 'subActivityId');
		RequestCheckUtil::checkNotNull($this->systemId, 'systemId');
	}
	
	public function getBizName(){
		return "receivePrize";
	}
	
}

?>