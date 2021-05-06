<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-3-31
 */
class ActioneffectAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $actionStoreCode;
	
	/**
	 * 
	 */
	private $actionType;
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $helpMemberId;
	
	/**
	 * 
	 */
	private $helpSnUnionId;
	
	/**
	 * 
	 */
	private $memberId;
	
	/**
	 * 
	 */
	private $profitValue;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $statisTime;
	
	public function getActionStoreCode() {
		return $this->actionStoreCode;
	}
	
	public function setActionStoreCode($actionStoreCode) {
		$this->actionStoreCode = $actionStoreCode;
		$this->apiParams["actionStoreCode"] = $actionStoreCode;
	}
	
	public function getActionType() {
		return $this->actionType;
	}
	
	public function setActionType($actionType) {
		$this->actionType = $actionType;
		$this->apiParams["actionType"] = $actionType;
	}
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getHelpMemberId() {
		return $this->helpMemberId;
	}
	
	public function setHelpMemberId($helpMemberId) {
		$this->helpMemberId = $helpMemberId;
		$this->apiParams["helpMemberId"] = $helpMemberId;
	}
	
	public function getHelpSnUnionId() {
		return $this->helpSnUnionId;
	}
	
	public function setHelpSnUnionId($helpSnUnionId) {
		$this->helpSnUnionId = $helpSnUnionId;
		$this->apiParams["helpSnUnionId"] = $helpSnUnionId;
	}
	
	public function getMemberId() {
		return $this->memberId;
	}
	
	public function setMemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParams["memberId"] = $memberId;
	}
	
	public function getProfitValue() {
		return $this->profitValue;
	}
	
	public function setProfitValue($profitValue) {
		$this->profitValue = $profitValue;
		$this->apiParams["profitValue"] = $profitValue;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getStatisTime() {
		return $this->statisTime;
	}
	
	public function setStatisTime($statisTime) {
		$this->statisTime = $statisTime;
		$this->apiParams["statisTime"] = $statisTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.actioneffect.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->actionType, 'actionType');
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->statisTime, 'statisTime');
	}
	
	public function getBizName(){
		return "addActioneffect";
	}
	
}

?>