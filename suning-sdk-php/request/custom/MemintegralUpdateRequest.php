<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-24
 */
class MemintegralUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $desc;
	
	/**
	 * 
	 */
	private $integral;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $optType;
	
	/**
	 * 
	 */
	private $rightType;
	
	public function getDesc() {
		return $this->desc;
	}
	
	public function setDesc($desc) {
		$this->desc = $desc;
		$this->apiParams["desc"] = $desc;
	}
	
	public function getIntegral() {
		return $this->integral;
	}
	
	public function setIntegral($integral) {
		$this->integral = $integral;
		$this->apiParams["integral"] = $integral;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getOptType() {
		return $this->optType;
	}
	
	public function setOptType($optType) {
		$this->optType = $optType;
		$this->apiParams["optType"] = $optType;
	}
	
	public function getRightType() {
		return $this->rightType;
	}
	
	public function setRightType($rightType) {
		$this->rightType = $rightType;
		$this->apiParams["rightType"] = $rightType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.memintegral.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->integral, 'integral');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
		RequestCheckUtil::checkNotNull($this->optType, 'optType');
		RequestCheckUtil::checkNotNull($this->rightType, 'rightType');
	}
	
	public function getBizName(){
		return "updateMemintegral";
	}
	
}

?>