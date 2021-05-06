<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-27
 */
class GeneraltaskAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $actId;
	
	/**
	 * 
	 */
	private $completeTime;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	public function getActId() {
		return $this->actId;
	}
	
	public function setActId($actId) {
		$this->actId = $actId;
		$this->apiParams["actId"] = $actId;
	}
	
	public function getCompleteTime() {
		return $this->completeTime;
	}
	
	public function setCompleteTime($completeTime) {
		$this->completeTime = $completeTime;
		$this->apiParams["completeTime"] = $completeTime;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.generaltask.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->actId, 'actId');
		RequestCheckUtil::checkNotNull($this->completeTime, 'completeTime');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
	}
	
	public function getBizName(){
		return "addGeneraltask";
	}
	
}

?>