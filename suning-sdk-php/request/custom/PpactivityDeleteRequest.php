<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-24
 */
class PpactivityDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $optType;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getOptType() {
		return $this->optType;
	}
	
	public function setOptType($optType) {
		$this->optType = $optType;
		$this->apiParams["optType"] = $optType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.ppactivity.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->optType, 'optType');
	}
	
	public function getBizName(){
		return "deletePpactivity";
	}
	
}

?>