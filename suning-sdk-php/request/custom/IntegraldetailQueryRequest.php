<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2021-1-7
 */
class IntegraldetailQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $rightType;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	
	
	public function getRightType() {
		return $this->rightType;
	}
	
	public function setRightType($rightType) {
		$this->rightType = $rightType;
		$this->apiParams["rightType"] = $rightType;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.integraldetail.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->rightType, 'rightType');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
	}
	
	public function getBizName(){
		return "queryIntegraldetail";
	}
	
}

?>