<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-9-3
 */
class MemrightGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $rightType;
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getRightType() {
		return $this->rightType;
	}
	
	public function setRightType($rightType) {
		$this->rightType = $rightType;
		$this->apiParams["rightType"] = $rightType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.memright.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
	}
	
	public function getBizName(){
		return "getMemright";
	}
	
}

?>