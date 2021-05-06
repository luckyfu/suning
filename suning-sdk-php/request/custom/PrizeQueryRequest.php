<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-10
 */
class PrizeQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $memberId;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getMemberId() {
		return $this->memberId;
	}
	
	public function setMemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParams["memberId"] = $memberId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.prize.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->memberId, 'memberId');
	}
	
	public function getBizName(){
		return "queryPrize";
	}
	
}

?>